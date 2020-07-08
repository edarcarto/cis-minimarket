<?php

namespace App\Repositories;

use App\Models\ProductImage;
use App\Repositories\BaseRepository;

/**
 * Class ProductImageRepository
 * @package App\Repositories
 * @version July 2, 2020, 3:14 am UTC
*/

class ProductImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'public_id',
        'asset_id',
        'url',
        'product_id'
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
        return ProductImage::class;
    }

    /**
     * Configure the Model
     **/
    public function saveImages($data, $id)
    {
        $products = [];
        foreach ($data as $key => $value) {
            $data = explode("|",$value); 
            array_push($products,[
                'public_id'     => $data[0],
                'asset_id'      => $data[1],
                'url'           => $data[2],
                'product_id'    => $id,
            ]);
        }
        return ProductImage::insert($products);
    }

    public function getImagesProduct($id){
        return ProductImage::where('product_id',$id)->get();
    }


    public function delImagesProduct($id){
        return ProductImage::where('product_id',$id)->delete();
    }
}
