<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
	protected $table = 'marketplaces';
    protected $fillable = ['title'];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function setTitleAttribute($value)
  	{
	    $this->attributes['title'] = $value;

	    if (! $this->exists) {
	      	$this->attributes['slug'] = str_slug($value);
	    }
	}
}
