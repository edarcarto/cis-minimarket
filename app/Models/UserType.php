<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserType
 * @package App\Models
 * @version July 20, 2020, 5:35 pm UTC
 *
 * @property string $type_name
 * @property boolean $active
 */
class UserType extends Model
{
    use SoftDeletes;

    public $table = 'user_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_name',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_name' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_name' => '[Duired',
        'active' => 'required'
    ];

    
}
