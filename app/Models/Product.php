<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function specific_products(): HasMany
    {
        return $this->hasMany(SpecificProduct::class);
    }

    public function lists(): BelongsToMany
    {
        return $this->belongsToMany(ShoppingList::class);
    }
}
