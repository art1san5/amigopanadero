<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'featured',
        'title',
        'ingredients',
        'procedure',
    ];

    protected $dates = [
        'deleted_at'
    ];

    // protected $casts = [
    //     'ingredients' => 'array',
    //     'procedure' => 'array',
    // ];

    /**
     * Convet array to string conversion
     */
    public function setIngredientsAttribute($value)
    {
        $this->attributes['ingredients'] = json_encode($value);
    }

    public function setProcedureAttribute($value)
    {
        $this->attributes['procedure'] = json_encode($value);
    }

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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
