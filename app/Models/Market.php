<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Market extends Model
{
    use SoftDeletes;

    public $table = 'markets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'market_name',
        'address',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'market_name' => 'string',
        'address' => 'string',
        'active' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'market_name' => 'required',
        'address' => 'required',
        'active' => 'required'
    ];
    
}
