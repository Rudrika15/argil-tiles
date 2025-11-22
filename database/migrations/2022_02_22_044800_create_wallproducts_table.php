<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWallproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallproducts', function (Blueprint $table) {
            $table->id();
			$table->string("name");
			$table->string("size");
			$table->string("finishType");
			$table->string("stock");
			$table->string("designType");
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
        Schema::dropIfExists('wallproducts');
    }
}
