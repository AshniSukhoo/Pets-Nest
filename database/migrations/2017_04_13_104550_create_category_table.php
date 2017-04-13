<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('category', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('category_id');
			$table->string('type', 500);
		});
	}

	public function down()
	{
		Schema::drop('category');
	}
}