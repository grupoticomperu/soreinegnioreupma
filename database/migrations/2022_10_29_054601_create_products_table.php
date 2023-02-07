<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('codigo')->nullable();

            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('video')->nullable();

            $table->double('purchaseprice', 8, 4)->nullable();//precio-compra
            $table->double('saleprice', 8, 4)->nullable();//precio venta
            $table->double('salepricemin', 8, 4)->nullable();//precio venta minimo

            $table->double('stock', 8, 2)->nullable();
            $table->double('stockmin', 8, 2)->nullable();

            $table->enum('currency', [Product::SOLES, Product::DOLARES])->default(Product::SOLES);

            $table->unsignedBigInteger('um_id')->nullable();
            $table->foreign('um_id')->references('id')->on('ums')->onDelete('cascade');

            $table->unsignedBigInteger('modelo_id')->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');

            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');

            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');

            $table->boolean('state')->default(true);

            $table->string('titlegoogle')->nullable();
            $table->text('descriptiongoogle')->nullable();
            $table->string('keywordsgoogle')->nullable();

            $table->string('image1', 2048)->nullable();
            $table->string('image2', 2048)->nullable();
            $table->string('image3', 2048)->nullable();
            $table->string('image4', 2048)->nullable();
            $table->string('brochure', 2048)->nullable();

            $table->enum('typeproduct', [Product::NUEVO, Product::USADO])->default(Product::NUEVO);

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
        Schema::dropIfExists('products');
    }
}
