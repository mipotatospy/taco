<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpecificProduct extends Model
{
    use HasFactory;

    public function generic_product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
