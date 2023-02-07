<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHometwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hometwos', function (Blueprint $table) {
            $table->id();

            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2', 50)->nullable();
            $table->string('title3')->nullable();
            $table->string('texttitle')->nullable();
            $table->string('subtitle1')->nullable();
            $table->string('textsubtitle1')->nullable();
            $table->string('iconsubtitle1')->nullable();
            $table->string('subtitle2')->nullable();
            $table->string('textsubtitle2')->nullable();
            $table->string('iconsubtitle2')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('hometwos');
    }
}
