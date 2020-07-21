<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Repositories\BaseRepository;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version July 5, 2020, 3:56 pm UTC
*/

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'order_date',
        'required_date',
        'shipped_date',
        'ship_via',
        'freight',
        'ship_name',
        'ship_address',
        'ship_city',
        'ship_region',
        'ship_postal_code',
        'ship_country',
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
        return Order::class;
    }

    function saveDetails($detail){
        
        return OrderDetail::insert($detail);
    }

    function  showDetails($id){
        return OrderDetail::where('order_id',$id)->get();
    }
}
