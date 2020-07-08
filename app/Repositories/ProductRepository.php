<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductImage;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version July 2, 2020, 3:14 am UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'quantity_per_unit',
        'unit_price',
        'units_in_stock',
        'units_on_order',
        'reorder_level',
        'supplier_id',
        'category_id',
        'trademark_id',
        'active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }

    function getProductImages()
    {
        $all = [];
        $products = Product::paginate(20);
        foreach ($products as $product => $p) {
            $p = $p;
            $images = ProductImage::where('product_id',$p->id)->limit(2)->get();
            $p->product_image = $images;
            array_push($all,$p);
        }
        return $all;
    }

    function getProductImage($id)
    {
        $product = Product::find($id);
        $images = ProductImage::where('product_id',$id)->get();
        $product->product_images = $images;
        return $product;
    }
}
