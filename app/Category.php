<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillabe = [
        'name'
    ];

    /**
     * Linked categories to a recipe
     */
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function getRecipeListAttribute()
    {
        return $this->recipes->pluck('id')->all();
    }
}
