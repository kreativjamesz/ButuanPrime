<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
    	'title',
    	'type',
    	'price',
    	'bedrooms',
    	'bathrooms',
    	'floor_area',
    	'min_lot_area',
        'status',
        'photos',
        'location',
        'address',
        'barangay',
        'city_prov',
        'country',
        'zip',
        'description',
    ];
}
