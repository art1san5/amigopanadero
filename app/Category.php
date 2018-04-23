<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillabe = [
        'name',
        'category_image'
    ]; 

    /**
     * Linked categories to a recipe
     */
    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }

    /**
     * Return user who created a category
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
