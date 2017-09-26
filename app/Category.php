<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title'];

    public function products()
    {
    	return $this->belongsToMany(Product::class);
    }

    public function setTitleAttribute($value)
  	{
	    $this->attributes['title'] = $value;

	    if (! $this->exists) {
	      	$this->attributes['slug'] = str_slug($value);
	    }
	}
}
