<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'age',
        'password',
    ];

    public function getDates()
    {
        return [];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * List of recipes created by a user
     */
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    /**
     * List of vidoes updated by a user
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    /**
     * List of categories created by a user
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function groceries()
    {
        return $this->hasMany(Grocery::class);
    }

    public function bakerymaths()
    {
        return $this->hasMany(Bakerymath::class);
    }

}
