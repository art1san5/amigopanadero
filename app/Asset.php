<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'path'
    ];

    /**
     *  Linked video asset to a recipe
     */
    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }

}
