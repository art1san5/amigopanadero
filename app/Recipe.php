<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];

    /**
     *  User who created a recipe
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Linked Asset / Video from a recipe
     */
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    /**
     * Linked featured Image to a recipe
     */
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    /**
     * List all categories linked to recipes
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getCategoryListAttribute()
    {
        return $this->categories->pluck('id')->all();
    }
}
