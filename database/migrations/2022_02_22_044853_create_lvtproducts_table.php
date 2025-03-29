<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLvtproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvtproducts', function (Blueprint $table) {
            $table->id();
			$table->string("names");
			$table->string("thicknesses");
			$table->string("primarycolors");
			$table->string("edges",10);
			$table->string("clicktype");
			$table->string("shadeVariation");
			$table->string("backingType");
			$table->string("style");
			$table->string("wearLayer");
			$table->string("bookmatch");
			$table->string("mainImg");
			$table->string("subImg1")->nullable();
			$table->string("subImg2")->nullable();	
			$table->string("subImg3")->nullable();
			$table->string("subImg4")->nullable();
			$table->string("subImg5")->nullable();
			$table->string("status",10)->default("Active");

			
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
        Schema::dropIfExists('lvtproducts');
    }
}
