<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->boolean('state')->default(true);

            $table->text('shortdescription')->nullable();
            $table->text('longdescription')->nullable();
            $table->integer('order')->nullable();

            $table->string('image', 2048)->default('categoriasproductos/default.jpg')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();


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
        Schema::dropIfExists('categorias');
    }
}
