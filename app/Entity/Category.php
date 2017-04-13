<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends Eloquent {

	protected $table = 'category';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('category_id', 'type');

	public function categoryOfProduct()
	{
		return $this->hasOne('Product');
	}

}