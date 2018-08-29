<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductsTable extends Migration
{

    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->foreign('parent_id')->references('id')->on('category_products');
            $table->string('category_product_type')->nullable();
            $table->string('name', 255);
            $table->string('slug', 191)->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('order')->nullable()->default(0);
            $table->boolean('status')->default(true);
            $table->nullableTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_products');
    }
}
