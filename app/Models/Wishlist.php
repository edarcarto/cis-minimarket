<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version July 1, 2020, 11:33 pm UTC
 *
 * @property string $category_name
 * @property integer $category_id
 * @property integer $parent
 * @property integer $active
 */
class Wishlist extends Model
{
    use SoftDeletes;

    public $table = 'wishlists';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'product_id',
        // 'parent',
        // 'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'product_id' => 'required'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
    
}
