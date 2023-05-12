<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Recipe extends Model
{
    use HasFactory;

    public function generic_products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(Favourites::class, User::class);
    }
}
