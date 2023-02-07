<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('movil')->nullable();
            $table->string('message')->nullable();
            $table->text('email')->nullable();
            $table->boolean('state')->default(false);
            $table->date('date')->default(Carbon::now());
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();

        });
    }



    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
