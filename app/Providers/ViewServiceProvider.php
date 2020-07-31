<?php

namespace App\Providers;
use App\Models\Customer;
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
            dd($categoryItems);
            
            
            
        
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
        View::composer(['customers.fields'], function ($view) {
            $ubigeo_peru_departments = array(
                array('id' => '0','name' => 'Seleccione'),
                array('id' => '01','name' => 'Amazonas'),
                array('id' => '02','name' => 'Áncash'),
                array('id' => '03','name' => 'Apurímac'),
                array('id' => '04','name' => 'Arequipa'),
                array('id' => '05','name' => 'Ayacucho'),
                array('id' => '06','name' => 'Cajamarca'),
                array('id' => '07','name' => 'Callao'),
                array('id' => '08','name' => 'Cusco'),
                array('id' => '09','name' => 'Huancavelica'),
                array('id' => '10','name' => 'Huánuco'),
                array('id' => '11','name' => 'Ica'),
                array('id' => '12','name' => 'Junín'),
                array('id' => '13','name' => 'La Libertad'),
                array('id' => '14','name' => 'Lambayeque'),
                array('id' => '15','name' => 'Lima'),
                array('id' => '16','name' => 'Loreto'),
                array('id' => '17','name' => 'Madre de Dios'),
                array('id' => '18','name' => 'Moquegua'),
                array('id' => '19','name' => 'Pasco'),
                array('id' => '20','name' => 'Piura'),
                array('id' => '21','name' => 'Puno'),
                array('id' => '22','name' => 'San Martín'),
                array('id' => '23','name' => 'Tacna'),
                array('id' => '24','name' => 'Tumbes'),
                array('id' => '25','name' => 'Ucayali')
              );
            $view->with('departments', $ubigeo_peru_departments);
        });
    }
}