<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('description');
            $table->integer('quantity_per_unit');
            $table->decimal('unit_price',10,4);
            $table->integer('units_in_stock');
            $table->integer('units_on_order');
            $table->integer('reorder_level');
            $table->integer('supplier_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('trademark_id')->unsigned();
            $table->integer('market_id')->unsigned();
            $table->integer('discontinued');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('trademark_id')->references('id')->on('trademarks');
            $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('market_id')->references('id')->on('markets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('products');
        Schema::enableForeignKeyConstraints();
    }
}
