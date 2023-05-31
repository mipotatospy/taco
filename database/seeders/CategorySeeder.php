<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$categories = [
            [
                'name' => 'Frutta e verdura',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Carne',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Pesce',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Salumi',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Uova, latte e derivati',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Vegan',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Pasta, riso e farine',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Dispensa',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Panetteria e pasticceria',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Dolci da colazione',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Caffè, tè e zucchero',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Alcolici',
                'picture' => 'xyz',
            ],
            [
                'name' => 'Acqua e bevande',
                'picture' => 'xyz',
            ],
            [
                'name' => 'cioccolato e caramelle',
                'picture' => 'xyz',
            ],
            [
                'name' => 'surgelati e gelati',
                'picture' => 'xyz',
            ],
            [
                'name' => 'cura casa',
                'picture' => 'xyz',
            ],
            [
                'name' => 'igiene persona',
                'picture' => 'xyz',
            ],
        ];
        
        DB::table('categories')->insert($categories);*/

        Category::factory()
            ->count(50)
            ->create();
    }
}

/*
$table->id();
            $table->string('name');
            $table->string('description');
            $table->string('picture');
*/ 