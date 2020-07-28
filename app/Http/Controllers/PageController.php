<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Repositories\ShipperRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\OrderRepository;
use Darryldecode\Cart\Facades\CartFacade as Cart;
// use App\Repositories\ProductRepository;
use Culqi\Culqi;
use Culqi\CulqiException;
use Flash;

class PageController extends Controller
{
    private $productRepository;
    private $shipperRepository;
    private $customerRepository;
    private $orderRepository;

    public function __construct(ProductRepository $productRepo,ShipperRepository $shipperRepo,
    CustomerRepository $custormerRepo, OrderRepository $orderRepo)
    {
        $this->productRepository = $productRepo;
        $this->shipperRepository = $shipperRepo;
        $this->customerRepository = $custormerRepo;
        $this->orderRepository = $orderRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getProductImages();
        // dd($products);
        return view('welcome')->with('products', $products);
    }

    public function viewProduct($id)
    {
        $product = $this->productRepository->getProductImage($id);
        // dd($product);
        return view('products.view')->with('product', $product);
    }

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->getProductImage($request->get('id'));
        $taxCondition = new \Darryldecode\Cart\CartCondition(array(
            'name'   => 'IGV 18%',
            'type'   => 'tax',
            'target' => 'total',
            'value'  => '-7.50%',
        ));
        // $saleCondition = new \Darryldecode\Cart\CartCondition(array(
        //     'name' => 'IGV +18%',
        //     'type' => 'tax',
        //     'target' => 'total',
        //     'value' => '18%',
        // ));
        $cartItem = Cart::add(
            uniqid(),
            $product->product_name,
            $product->unit_price,
            intval($request->get('quantity')), 
            ['all' => $product],
            $taxCondition,
        );
        // dd($cartItem);
        Flash::success('Producto agregado al carrito.');
        // return redirect()->route('product',['id' => $request->get('id')]);
        return redirect()->back();
    }

    public function cart()
    {
        $cart = Cart::getContent();
        // dd($cart);
        $igv = round(Cart::getSubTotal() * 0.18,2);
        return view('cart.index')->with('cart', $cart)->with('igv', $igv);
    }

    public function deleteProduct($id)
    {
        # Elimimando producto
        Cart::remove($id);
        // dd(Cart::getContent());
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        # debo eliminar si llega a 0
        $cart = Cart::get($request->get('id'));
        if($request->get('borrar') == true){
            Cart::remove($request->get('id'));
        }else{
            $qty = $request->get('qty');
            # update cart
            Cart::update($request->get('id'), array(
                'quantity' => $qty
            ));
        }
        $igv = round(Cart::getSubTotal() * 0.18,2);
        return response()->json([
            'message'   => 'carrito actualizado',
            'body'      => [
                'subtotal'  => round(round(Cart::getSubTotal(),3),2),
                'igv'       => $igv,
                'total'     => round(round(Cart::getTotal() + $igv,3),2)
            ]
        ]);        
    }

    public function pagarCarrito(Request $request)
    {
        try {
            # pagar el carrito
            $SECRET_KEY = "sk_test_6T1bAF2IubdlqCwV";
            $culqi = new Culqi(array('api_key' => $SECRET_KEY));
            // buscar al usuario con datos de cliente
            $customer = $this->customerRepository->getForUser(\Auth::id());
            // Creamos Cargo a una tarjeta
            $charge = $culqi->Charges->create(
                array(
                "amount"        => $request->get('amount'),
                "capture"       => true,
                "currency_code" => "PEN",
                "description"   => uniqid(),
                "email"         => "test_charge@culqi.com",
                "installments"  => 0,
                "source_id" => $request->get('token'),
                )
            );
            // dd($charge);
            $order = $this->processCart($request);
            return response()->json([
                'message'   => 'Pedido registrado con exito',
                'body'      => $order
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            if($e->getMessage()->merchant_message === "Ups! Algo salió mal en Culqi. Contáctate con culqi.com/soporte para obtener mas información."){
                $order = $this->processCart($request);
                return response()->json([
                    'message'   => 'Pedido registrado con exito',
                    'body'      => $order
                ]);
            }else{
                return response(500)->json([
                    'message'   => 'No se pudo efectuar el pago',
                    'body'      => null
                ]);
            }
        }
    }

    function processCart($data){
        // Seteando a donde se enviará el pedido
        $ship = $this->shipperRepository->create([
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'status' => 0,
        ]);
        // Hacer una orden de pedido
        $cart = Cart::getContent();
        $products = [];
        if($cart){
            #order 
            $order = $this->orderRepository->create([
                'customer_id'       => $customer->id,
                'order_date'        => now(),
                'required_date'     => null,
                'shipped_date'      => null,
                'ship_via'          => $ship->id,
                'freight'           => '0.00',
                'ship_name'         => $request->get('full_name'),
                'ship_address'      => $request->get('address'),
                'ship_city'         => $request->get('city'),
                'ship_region'       => $request->get('region'),
                'ship_postal_code'  => $request->get('code'),
                'log_pay'           => $request->get('culqi'),
                'ship_country'      => 'Perú'
            ]);
            # prepare details
            foreach ($cart as $row) {
                array_push($products,[
                    'order_id'   => $order->id,
                    'product_id' => $row->attributes->all->id,
                    'unit_price' => $row->price,
                    'quantity'   => $row->quantity,
                    'discount'   => '0.00' #falta
                ]);
                // disminuir cantidad de productos
                $product = $this->productRepository->find($row->attributes->all->id);
                $deducible = $product->units_in_stock - $row->quantity;
                $this->productRepository->update(['units_in_stock' => $deducible], $product->id);
            }
            $details = $this->orderRepository->saveDetails($products);
            $order->details = $details;
            Cart::clear();
            return $order;
    }
}
