<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('contact_title');
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->string('postal_code');
            $table->string('country');
            $table->string('phone');
            $table->string('fax');
            $table->string('homepage');
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
        Schema::drop('suppliers');
    }
}
