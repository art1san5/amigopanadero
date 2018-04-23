<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'video',
        'featured',
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
     * Video Linked to a recipe
     */
    public function video()
    {
        return $this->belongsTo(Video::class);
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
