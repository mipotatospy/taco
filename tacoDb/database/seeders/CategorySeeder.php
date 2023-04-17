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
        $categories = [
            [
                'name' => 'Frutta e verdura',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Carne',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Pesce',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Salumi',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Uova, latte e derivati',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Vegan',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Pasta, riso e farine',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Dispensa',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Panetteria e pasticceria',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Dolci da colazione',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Caffè, tè e zucchero',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Alcolici',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'Acqua e bevande',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'cioccolato e caramelle',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'surgelati e gelati',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'cura casa',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
            [
                'name' => 'igiene persona',
                'picture' => 'xyz',
                'description' => 'abc',
            ],
        ];
        
        DB::table('categories')->insert($categories);
    }
}

/*
$table->id();
            $table->string('name');
            $table->string('description');
            $table->string('picture');
*/ 