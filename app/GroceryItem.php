<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroceryItem extends Model
{
    protected $fillable = [
        'recipe',
        'isChecked',
        'index'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getDates()
    {
        return [];
    }

    public function grocery()
    {
        return $this->belongsTo(Grocery::class);
    }

    public function groceryItem()
    {
        return $this->belongsTo(GroceryItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
