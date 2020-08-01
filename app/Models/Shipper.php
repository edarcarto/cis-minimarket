<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shipper
 * @package App\Models
 * @version July 17, 2020, 1:27 am UTC
 *
 * @property string $address
 * @property string $phone
 * @property integer $status
 */
class Shipper extends Model
{
    use SoftDeletes;
    
    public $table = 'shippers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'address',
        'phone',
        'status',
        'delivery_date',
        'cancellation_date',
        'date_order',
        'market_id',
        'document',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address' => 'string',
        'phone' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'address' => 'required',
        'phone' => 'required',
        'status' => 'required'
    ];

    
}
