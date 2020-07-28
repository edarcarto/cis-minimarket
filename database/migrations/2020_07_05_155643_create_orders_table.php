<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->datetime('order_date');
            $table->datetime('required_date')->nullable();
            $table->datetime('shipped_date')->nullable();
            $table->integer('ship_via');
            $table->decimal('freight',10,4);
            $table->string('ship_name');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_region');
            $table->string('ship_postal_code');
            $table->string('ship_country');
            $table->text('log_pay')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
