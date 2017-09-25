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
            $table->string('title');
            $table->string('type');
            $table->decimal('price',10,2);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->decimal('floor_area',6,2);
            $table->decimal('min_lot_area',6,2);
            $table->integer('status')->unsigned();
            $table->string('photos');
            $table->text('location');
            $table->string('address');
            $table->string('barangay');
            $table->string('city_prov');
            $table->string('country');
            $table->string('zip');
            $table->string('description');
            $table->timestamps();
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
