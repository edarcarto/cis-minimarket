<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Repositories\ProductImageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    /** @var  ProductImageRepository */
    private $productRepository;
    private $productImageRepository;

    public function __construct(ProductRepository $productRepo,ProductImageRepository $productImageRepo)
    {
        $this->productRepository = $productRepo;
        $this->productImageRepository = $productImageRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->paginate(10);

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productRepository->create($input);

        // save imagenes of products
        if($request->images_products){
            $this->productImageRepository->saveImages($request->images_products,$product->id);
        }

        Flash::success('Product guardado correctamente.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $images = $this->productImageRepository->getImagesProduct($id);

        return view('products.show')->with('product', $product)->with('images', $images);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $images = $this->productImageRepository->getImagesProduct($id);

        return view('products.edit')->with('product', $product)->with('images', $images);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        // save imagenes of products
        if($request->images_products){
            $this->productImageRepository->saveImages($request->images_products,$product->id);
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Producto actualizado correctamente.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $this->productImageRepository->delImagesProduct($id);

        $this->productRepository->delete($id);

        Flash::success('Producto eliminado correctamente.');

        return redirect(route('products.index'));
    }
}
