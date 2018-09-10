<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->text('name');
            $table->string('code_pro');
            $table->string('trademark')->nullable();
            $table->integer('guarantee')->nullable();
            $table->tinyInteger('status');
            $table->text('image');
            $table->text('details')->nullable();
            $table->text('specification')->nullable();
            $table->text('promotion')->nullable();
            $table->integer('price');
            $table->integer('price_real')->nullable();
            $table->integer('category_id');

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
        Schema::drop('products');
    }
}
