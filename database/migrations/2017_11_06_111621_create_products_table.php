<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('images');
            $table->integer('price_in');
            $table->integer('price_out');
            $table->integer('price_sale');
            $table->integer('quantity');
            $table->integer('is_hot');
            $table->string('featured');
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->text('description');
            $table->text('content');
            $table->string('category_id');
            $table->string('user_id');
            $table->string('status');
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
