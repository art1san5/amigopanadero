<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'product_image',
        'product_name',
        'product_description',
        'product_specs',
        'product_category'
    ];

    public function getDates()
    {
        return [];
    }

    public function user() 
    {
        return $this->belongsTo(User::class);    
    }


}
