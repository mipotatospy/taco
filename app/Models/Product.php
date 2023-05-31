<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'transportation',
        'seasonality',
        'packaging',
        'procedure',
        'ingredients',
        'picture',
    ];

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function lists(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'lists_products', 'product_id', 'shopping_lists_id');
    }
}
