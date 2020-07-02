<?php

namespace App\Providers;
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
        View::composer(['categories.fields'], function ($view) {
            $categoryItems = array(0 => 'Seleccione');
            $categoryItems = array_merge($categoryItems,Category::pluck('category_name','id')->toArray());
            // dd($categoryItems);
            $view->with('categoryItems', $categoryItems);
        });
        //
    }
}