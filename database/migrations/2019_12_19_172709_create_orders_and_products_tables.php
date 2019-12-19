<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersAndProductsTables extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
        });

        Schema::create('order_discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id');
            $table->tinyInteger('percent');
        });

        Schema::create('order_item_discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_item_id');
            $table->tinyInteger('percent');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->float('price');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->bigInteger('product_id');
            $table->bigInteger('order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_discounts');
        Schema::dropIfExists('order_item_discounts');
        Schema::dropIfExists('products');
        Schema::dropIfExists('order_items');
    }
}
