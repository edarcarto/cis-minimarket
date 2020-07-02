<?php

namespace App\Providers;
use App\Models\Trademark;
use App\Models\Supplier;
use App\Models\Category;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['products.fields'], function ($view) {
            $trademarkItems = array(0 => 'Seleccione');
            $trademarkItems = array_merge($trademarkItems,Trademark::pluck('trade_name','id')->toArray());
            $view->with('trademarkItems', $trademarkItems);
        });
        View::composer(['products.fields'], function ($view) {
            $categoryItems = array(0 => 'Seleccione');
            $categoryItems = array_merge($categoryItems,Category::where('parent',0)->pluck('category_name','id')->toArray());
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['products.fields'], function ($view) {
            $supplierItems = array(0 => 'Seleccione');
            $supplierItems = array_merge($supplierItems,Supplier::pluck('company_name','id')->toArray());
            $view->with('supplierItems', $supplierItems);
        });
        View::composer(['categories.fields'], function ($view) {
            $categoryItems = array(0 => 'Seleccione');
            $categoryItems = array_merge($categoryItems,Category::pluck('category_name','id')->toArray());
            $view->with('categoryItems', $categoryItems);
        });
        //
    }
}