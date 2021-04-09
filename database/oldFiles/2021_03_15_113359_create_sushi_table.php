<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSushiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sushi', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("kind");
            $table->foreign("kind")->references("kind")->on("kind_of_sushi");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sushi', function (Blueprint $table) {
            $table->dropForeign('sushi_kind_foreign');
        });
        Schema::dropIfExists('sushi');
    }
}
