<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'product_name',
        'product_image',
        'product_description'
    ];

    public function getDates()
    {
        return [];
    }
}
