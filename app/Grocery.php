<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    protected $fillable = [
        'name',
        'category'
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
