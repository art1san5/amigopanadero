<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    protected $fillable = [
        'name',
        'category',
        'user_id'
    ];

    public function getDates()
    {
        return [];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function groceryItems()
    {
        return $this->hasMany(GroceryItem::class);
    }

}
