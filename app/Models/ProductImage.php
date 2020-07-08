<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use SoftDeletes;
    public $table = 'product_images';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'public_id',
        'url',
        'product_id',
        'asset_id',
    ];
}
