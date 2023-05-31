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
        /*
        Schema::create('products', function($table){
            $table->integer('id')->primary()->unique()->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();  
            $table->string('name');
            $table->string('transportation');
            $table->boolean('seasonality');
            $table->string('packaging');
            $table->string('procedure');
            $table->string('ingredients');
            $table->string('picture');
            $table->date('expiration')->nullable();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
        */
    }

}
