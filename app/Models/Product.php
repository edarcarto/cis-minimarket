<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version July 2, 2020, 3:14 am UTC
 *
 * @property string $product_name
 * @property string $description
 * @property integer $quantity_per_unit
 * @property integer $unit_price
 * @property integer $units_in_stock
 * @property integer $units_on_order
 * @property integer $reorder_level
 * @property integer $supplier_id
 * @property integer $category_id
 * @property integer $trademark_id
 * @property integer $discontinued
 * @property integer $active
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'description',
        'quantity_per_unit',
        'unit_price',
        'units_in_stock',
        'units_on_order',
        'reorder_level',
        'supplier_id',
        'category_id',
        'trademark_id',
        'market_id',
        'discontinued',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'description' => 'string',
        'quantity_per_unit' => 'integer',
        'unit_price' => 'float,10,4',
        'units_in_stock' => 'integer',
        'units_on_order' => 'integer',
        'reorder_level' => 'integer',
        'supplier_id' => 'integer',
        'category_id' => 'integer',
        'trademark_id' => 'integer',
        'market_id'=>'integer',
        'discontinued' => 'integer',
        'active' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'description' => 'required',
        'quantity_per_unit' => 'required',
        'unit_price' => 'required',
        'units_in_stock' => 'required',
        'units_on_order' => 'required',
        'reorder_level' => 'required',
        'supplier_id' => 'required|min:1',
        'category_id' => 'required|min:1',
        'trademark_id' => 'required|min:1',
        'market_id'=>'required|min:1',
        'discontinued' => 'required',
        'active' => 'required'
    ];

    /**
     * Get the phone record associated with the supplier.
     */
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id','id');
    }

    /**
     * Get the phone record associated with the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    /**
     * Get the phone record associated with the trademark.
     */
    public function trademark()
    {
        return $this->belongsTo('App\Models\Trademark','trademark_id','id');
    }

    /**
     * Get the phone record associated with the trademark.
     */
    public function market()
    {
        return $this->belongsTo('App\Models\Market','market_id','id');
    }
}
