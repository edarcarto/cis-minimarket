<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fullname')->nullable();
            $table->integer('status')->nullable();
            $table->integer('market_id')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('cancellation_date')->nullable();
            $table->timestamp('date_order')->nullable();
            $table->string('document',8)->nullable();
            $table->string('type',20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shippers');
    }
}
