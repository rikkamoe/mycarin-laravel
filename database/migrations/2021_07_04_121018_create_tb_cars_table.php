<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cars', function (Blueprint $table) {
            $table->id();
            $table->string('name_car');
            $table->string('type_car');
            $table->string('field_car');
            $table->string('season_car');
            $table->longText('description_car');
            $table->integer('price_car');
            $table->string('img_car');
            $table->integer('status_car')->default('1');
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
        Schema::dropIfExists('tb_cars');
    }
}
