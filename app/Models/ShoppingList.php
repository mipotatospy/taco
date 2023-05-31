<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ShoppingList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'picture',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user__lists');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'lists_products', 'shopping_lists_id', 'product_id');
    }
}
