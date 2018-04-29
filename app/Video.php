<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'path',
        'user_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $visible = [
        'path'
    ];

    public function getDates()
    {
        return [];
    }

    /**
     *  User who created a recipe
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** 
     * Video that belongs to a recipe
     */
    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }
}
