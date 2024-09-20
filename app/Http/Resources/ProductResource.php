<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'transportation' => $this->transportation,
            'seasonality' => $this->seasonality,
            'procedure' => $this->procedure,
            'ingredients' => $this->ingredients,
            'picture' => $this->picture,
            'expiration' => $this->expiration,
        ];
    }

}
