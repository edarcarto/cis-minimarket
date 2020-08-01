<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    public $table = 'order_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = ['order_id','product_id','unit_price','quantity','discount'];

    /**
     * Get the phone record associated with the user.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id','id');
    }
}
