<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakerymath extends Model
{
    protected $fillable = [
        'ingredient',
        'quantity'
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
