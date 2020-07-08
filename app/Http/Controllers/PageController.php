<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;

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
            'all' => $product,
        ]);
        return redirect()->route('product',['id' => $request->get('id')]);
    }
}
