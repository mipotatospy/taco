<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
                'id' => 1,
                'parent_id' => null,
                'name' => 'Mela',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'flavonoidi, pectina, acido citrico, acido malico, acqua, proteine, fruttosio, vitamine A, C, PP, B1 e B2',
                'picture' => 'xyz',
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'name' => 'Mela Sudtirol',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'flavonoidi, pectina, acido citrico, acido malico, acqua, proteine, fruttosio, vitamine A, C, PP, B1 e B2',
                'picture' => 'xyz',
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => 'Mela Val di Non Dop (Melinda)',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'flavonoidi, pectina, acido citrico, acido malico, acqua, proteine, fruttosio, vitamine A, C, PP, B1 e B2',
                'picture' => 'xyz',
            ],
            [
                'id' => 4,
                'parent_id' => null,
                'name' => 'Zucchina',
                'transportation' => 'xyz',
                'seasonality' => False,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, vitamine A, C, E, K, niacina, acido pantotenico, piridossina, riboflavina, tiamina, folati, potassio, fosforo, magnesio, calcio, sodio, ferro, zinco, manganese, selenio',
                'picture' => 'xyz',
            ],
            [
                'id' => 5,
                'parent_id' => 4,
                'name' => 'Zucchina Germisem',
                'transportation' => 'xyz',
                'seasonality' => False,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, vitamine A, C, E, K, niacina, acido pantotenico, piridossina, riboflavina, tiamina, folati, potassio, fosforo, magnesio, calcio, sodio, ferro, zinco, manganese, selenio',
                'picture' => 'xyz',
            ],
            // [
            //     'id' => 6,
            //     'name' => "Zucchina L'ORTOLANO",
            //     'transportation' => 'xyz',
            //     'seasonality' => False,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, vitamine A, C, E, K, niacina, acido pantotenico, piridossina, riboflavina, tiamina, folati, potassio, fosforo, magnesio, calcio, sodio, ferro, zinco, manganese, selenio',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 7,
            //     'name' => 'Hamburger bovino',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 8,
            //     'name' => 'Hamburger bovino Montana',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 9,
            //     'name' => 'Hamburger bovino Sadia',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 10,
            //     'name' => 'Salsiccia di suino',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 11,
            //     'name' => 'Salsiccia di suino Applegate ',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 12,
            //     'name' => 'Salsiccia di suino Johnsonville',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 13,
            //     'name' => 'Uova',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 14,
            //     'name' => 'Uova Aia',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 15,
            //     'name' => 'Uova Carrefour Classic',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 16,
            //     'name' => 'Latte senza lattosio',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Glucosio, galattosio, calcio',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 17,
            //     'name' => 'Latte senza lattosio Zymil',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Glucosio, galattosio, calcio',
            //     'picture' => 'xyz',
            // ],
            // [
            //     'id' => 18,
            //     'name' => 'Latte senza lattosio Parmalat',
            //     'transportation' => 'xyz',
            //     'seasonality' => True,
            //     'packaging' => 'xyz',
            //     'procedure' => 'xyz',
            //     'ingredients' => 'Glucosio, galattosio, calcio',
            //     'picture' => 'xyz',
            // ],
        ];
        
        DB::table('products')->insert($products);
    }
}
