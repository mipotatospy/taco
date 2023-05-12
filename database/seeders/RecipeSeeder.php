<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->foreignId('category_id')->constrained();
            $table->string('procedure');
            $table->string('picture');
        });
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Flat apple & vanilla tart',
                'description' => 'A gorgeous looking tart that is fantastic for any occasion - from morning tea to decadent dessert',
                'category_id' => 10, //Dolci da colazione
                //'product_id' => 1, //Dolci da colazione
                'procedure' => 'xyz',
                'picture' => 'xyz',
            ],
            /*[
                'name' => 'Carne',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Pesce',
                'picture' => 'xyz',
            ],*/
        ];
        
        DB::table('recipes')->insert($recipes);
    }
}
