<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'about_company'
    ];

    public function getDates()
    {
        return [];
    }
}
