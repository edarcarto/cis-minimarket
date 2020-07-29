<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supplier
 * @package App\Models
 * @version July 2, 2020, 2:02 am UTC
 *
 * @property string $company_name
 * @property string $contact_name
 * @property string $contact_title
 * @property string $address
 * @property string $city
 * @property string $region
 * @property string $postal_code
 * @property string $country
 * @property string $phone
 * @property string $fax
 * @property string $homepage
 */
class Supplier extends Model
{
    use SoftDeletes;

    public $table = 'suppliers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'company_name',
        'contact_name',
        'contact_title',
        'address',
        'city',
        'region',
        'postal_code',
        // 'country',
        'phone',
        // 'fax',
        'homepage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_name' => 'string',
        'contact_name' => 'string',
        'contact_title' => 'string',
        'address' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'homepage' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_name' => 'required',
        'contact_name' => 'required',
        'contact_title' => 'required',
        'address' => 'required',
        'city' => 'required',
        'phone' => 'required'
    ];

    
}
