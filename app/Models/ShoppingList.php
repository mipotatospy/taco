<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class ShoppingList extends Model
{
    use HasFactory;

    public function user_lists(): HasMany
    {
        return $this->hasMany(User_list::class);
    }

    public function users(): HasManyThrough
    {
        return $this->through('user_lists')->has('users');
    }

    public function generic_products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function specific_products(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SpecificProduct::class);
    }
}
