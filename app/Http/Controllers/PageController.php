<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Flash;

class PageController extends Controller
{
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
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
}
