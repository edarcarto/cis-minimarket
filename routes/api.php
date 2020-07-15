<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/upload/images/products',[
    'uses'  => 'ImageUploadController@uploadImageProducts',
    'as'    => 'uploadImageProducts'
]);

Route::post('/delete/images',[
    'uses'  => 'ImageUploadController@deleteImage',
    'as'    => 'deleteImage'
]);

Route::post('update-cart',[
    'uses'  => 'PageController@updateCart',
    'as'    => 'updateCart'
]);