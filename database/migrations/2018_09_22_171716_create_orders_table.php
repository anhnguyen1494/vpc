<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name1');
            $table->string('email1')->nullable();
            $table->string('phone1');
            $table->text('address1');
            $table->string('city1');
            $table->string('district1');

            $table->integer('total_price');

            $table->string('name2')->nullable();
            $table->string('email2')->nullable();
            $table->string('phone2')->nullable();
            $table->text('address2')->nullable();
            $table->string('city2')->nullable();
            $table->string('district2')->nullable();

            $table->text('note')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
