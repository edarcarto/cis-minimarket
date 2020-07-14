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
        $cartItem = Cart::add(uniqid(), $product->product_name, $product->unit_price, intval($request->get('quantity')), [
            'all' => $product
        ]);
        // dd($cartItem);
        Flash::success('Producto agregado al carrito.');
        // return redirect()->route('product',['id' => $request->get('id')]);
        return redirect()->back();
    }

    public function cart()
    {
        $cart = Cart::getContent();
        // dd(Cart::getContent());
        return view('cart.index')->with('cart', $cart);
    }
}
