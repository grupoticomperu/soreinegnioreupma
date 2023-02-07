<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('dni')->nullable();
            $table->string('phone')->nullable();
            $table->string('movil')->nullable();
            $table->text('shortdescription')->nullable();
            $table->text('longdescription')->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();

            $table->boolean('state')->default(true);

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
        Schema::dropIfExists('testimonies');
    }
}
