<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'description',
    ];

    /**
     * Get the menu items for the restaurant.
     */
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
