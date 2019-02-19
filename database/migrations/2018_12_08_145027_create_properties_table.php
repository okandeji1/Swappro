<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('type_id');
            $table->string('address');
            $table->string('lga');
            $table->string('property_for');
            $table->string('status');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();



            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('property_types');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
