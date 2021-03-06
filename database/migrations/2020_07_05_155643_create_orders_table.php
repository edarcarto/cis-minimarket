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
            $table->datetime('order_date')->nullable();
            $table->datetime('required_date')->nullable();
            $table->datetime('shipped_date')->nullable();
            $table->integer('ship_via');
            $table->decimal('freight',10,4);
            $table->string('ship_name')->nullable();
            $table->string('ship_address')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_region')->nullable();
            $table->string('ship_postal_code')->nullable();
            $table->string('ship_country')->nullable();
            $table->integer('departament')->nullable();
            $table->integer('province')->nullable();
            $table->integer('district')->nullable();
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
