<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories_products', function (Blueprint $table) {
            $table->dropForeign('categories_products_category_id_foreign');
            $table->dropForeign('categories_products_product_id_foreign');
        });

        Schema::dropIfExists('categories_products');
    }
}
