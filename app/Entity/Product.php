<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Eloquent {

	protected $table = 'product';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('type', 'image_path', 'description', 'name');

	public function productCategory()
	{
		return $this->hasMany('Category', 'category_id');
	}

}