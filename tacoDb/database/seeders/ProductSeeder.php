<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $table->integer('id')->primary()->unique()->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();  
            $table->string('name');
            $table->string('transportation'); 
            $table->boolean('seasonality'); -->
            $table->string('packaging');
            $table->string('procedure'); -->
            $table->string('ingredients');
            $table->string('picture');
            $table->date('expiration'); -->
        */
        $products = [
            [
                'name' => 'Frutta e verdura',
                'transportation' => 'Frutta e verdura',
                'seasonality' => 'Frutta e verdura',
                'packaging' => 'Frutta e verdura',
                'procedure' => 'Frutta e verdura',
                'ingredients' => 'abc',
                'picture' => 'xyz',
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
        
        DB::table('products')->insert($products);
    }
}
