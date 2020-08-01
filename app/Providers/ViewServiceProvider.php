<?php

namespace App\Providers;
use App\Models\Customer;
use App\Models\Trademark;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Market;

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
        View::composer(['orders.fields'], function ($view) {
            $customerItems = Customer::pluck('first_name','id')->toArray();
            $view->with('customerItems', $customerItems);
        });
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
        View::composer(['users.fields'], function ($view) {
            $typeUsers = array(0 => 'Seleccione');
            $typeUsers = array_merge($categoryItems,UserType::pluck('type_name','id')->toArray());
            $view->with('typeUsers', $typeUsers);
        });
        View::composer(['cart.index'], function ($view) {
            $marketItem = array(0 => 'Seleccione');
            $marketItem = array_merge($marketItem,Market::pluck('address','id')->toArray());
            $view->with('marketItems', $marketItem);
        });
        View::composer(['products.fields'], function ($view) {
            $marketItem = array(0 => 'Seleccione');
            $marketItem = array_merge($marketItem,Market::pluck('address','id')->toArray());
            $view->with('markets', $markets);
        });
        //
        View::composer(['customers.fields'], function ($view) {
            $ubigeo_peru_departments = array(
                0=> 'Seleccione',
                1=> 'Amazonas',
                2=>  'Áncash',
                3=> 'Apurímac',
                4=> 'Arequipa',
                5=> 'Ayacucho',
                6=> 'Cajamarca',
                7=> 'Callao',
                8=> 'Cusco',
                9=> 'Huancavelica',
                10=> 'Huánuco',
                11=> 'Ica',
                12=> 'Junín',
                13=> 'La Libertad',
                14=> 'Lambayeque',
                15=> 'Lima',
                16=> 'Loreto',
                17=> 'Madre de Dios',
                18=> 'Moquegua',
                19=> 'Pasco',
                20=> 'Piura',
                21=> 'Puno',
                22=> 'San Martín',
                23=> 'Tacna',
                24=> 'Tumbes',
                25=> 'Ucayali'
              );
            $view->with('departments', $ubigeo_peru_departments);
        });
    }
}