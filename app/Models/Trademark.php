<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trademark
 * @package App\Models
 * @version July 2, 2020, 1:22 am UTC
 *
 * @property string $trade_name
 * @property integer $active
 */
class Trademark extends Model
{
    use SoftDeletes;

    public $table = 'trademarks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'trade_name',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trade_name' => 'string',
        'active' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trade_name' => 'required'
    ];

    
}
