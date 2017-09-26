<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','slug','marketplace_id','category_id','reg_price','dc_price'];

    public function setTitleAttribute($value)
  	{
	    $this->attributes['title'] = $value;

	    if (! $this->exists) {
	      	$this->attributes['slug'] = str_slug($value);
	    }
	}
    public function marketplace()
    {
    	return $this->belongsTo(Marketplace::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
