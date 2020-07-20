<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version July 3, 2020, 8:05 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property integer $document_type
 * @property string $document_number
 * @property string $phone
 * @property integer $departament
 * @property integer $province
 * @property integer $district
 * @property string $address
 * @property string $number
 * @property integer $legal
 * @property integer $tyc
 * @property integer $active
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'document_type',
        'document_number',
        'phone',
        'departament',
        'province',
        'district',
        'address',
        'number',
        'legal',
        'tyc',
        'active',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'document_type' => 'integer',
        'document_number' => 'string',
        'phone' => 'string',
        'departament' => 'integer',
        'province' => 'integer',
        'district' => 'integer',
        'address' => 'string',
        'number' => 'string',
        'legal' => 'integer',
        'tyc' => 'integer',
        'active' => 'integer',
        'user_id'=> 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'document_type' => 'required',
        'document_number' => 'required',
        'phone' => 'required',
        'departament' => 'required',
        'province' => 'required',
        'district' => 'required',
        'address' => 'required',
        'number' => 'required',
        'legal' => 'required',
        'tyc' => 'required',
        'active' => 'required',
        'user_id' => 'required'
    ];

    
}
