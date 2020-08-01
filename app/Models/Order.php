<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version July 5, 2020, 3:56 pm UTC
 *
 * @property integer $customer_id
 * @property string|\Carbon\Carbon $order_date
 * @property string|\Carbon\Carbon $required_date
 * @property string|\Carbon\Carbon $shipped_date
 * @property integer $ship_via
 * @property number $freight
 * @property string $ship_name
 * @property string $ship_address
 * @property string $ship_city
 * @property string $ship_region
 * @property string $ship_postal_code
 * @property string $ship_country
 * @property integer $active
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'log_pay',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'order_date' => 'datetime',
        'required_date' => 'datetime',
        'shipped_date' => 'datetime',
        'ship_via' => 'integer',
        'freight' => 'float',
        'ship_name' => 'string',
        'ship_address' => 'string',
        'ship_city' => 'string',
        'ship_region' => 'string',
        'ship_postal_code' => 'string',
        'ship_country' => 'string',
        'log_pay'=>'string',
        'active' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'order_date' => 'required',
        'required_date' => 'required',
        'shipped_date' => 'required',
        'ship_via' => 'required',
        'freight' => 'required',
        'ship_name' => 'required',
        'ship_address' => 'required',
        'ship_city' => 'required',
        'ship_region' => 'required',
        'ship_postal_code' => 'required',
        'ship_country' => 'required',
        'active' => 'required'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function shipper()
    {
        return $this->belongsTo('App\Models\Shipper','ship_via','id');
    }
    
}
