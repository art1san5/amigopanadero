<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'path'
    ];

    /**
     * Linked featured Image to a recipe
     */
    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }
}
