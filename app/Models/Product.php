<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image_name',
        'description',
        'price',
        'quantity',
        'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }
    
    
}
