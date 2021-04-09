<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->foreign('category')->references('category')->on('category_of_product');
            $table->unsignedBigInteger('borrowed')->nullable()->unsigned();
            $table->foreign('borrowed')->references('id')->on('users');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_user_id_foreign');
            $table->dropForeign('product_category_foreign');
        });
        Schema::dropIfExists('product');
    }
}