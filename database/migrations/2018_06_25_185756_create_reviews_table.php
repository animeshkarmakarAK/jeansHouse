<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('userId')->references('id')->on('users');
            $table->integer('ratingPoint')->unsigned();
            $table->string('reviewDescription');
            $table->foreign('product_id')->references('id')->on('product');
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
        Schema::dropIfExists('review');
    }
}
