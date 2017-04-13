<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	public function up()
	{
		Schema::create('product', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('type', 200);
			$table->string('image_path');
			$table->string('description');
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('product');
	}
}