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
                'bought' => False,
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
                'bought' => False,
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
                'bought' => False,
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
                'bought' => False,
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
                'bought' => False,
            ],
            [
                'id' => 6,
                'parent_id' => 4,
                'name' => "Zucchina L'ORTOLANO",
                'transportation' => 'xyz',
                'seasonality' => False,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, vitamine A, C, E, K, niacina, acido pantotenico, piridossina, riboflavina, tiamina, folati, potassio, fosforo, magnesio, calcio, sodio, ferro, zinco, manganese, selenio',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 7,
                'parent_id' => null,
                'name' => 'Hamburger bovino',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 8,
                'parent_id' => 7,
                'name' => 'Hamburger bovino Montana',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 9,
                'parent_id' => 7,
                'name' => 'Hamburger bovino Sadia',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, sale, soia, saccarosio, destrosio, emulsionanti: E472e, E471, E481, E300, E516, E262, E210, E327',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 10,
                'parent_id' => null,
                'name' => 'Salsiccia di suino',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 11,
                'parent_id' => 10,
                'name' => 'Salsiccia di suino Applegate ',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 12,
                'parent_id' => 10,
                'name' => 'Salsiccia di suino Johnsonville',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Acqua, Sodio, Potassio, Calcio, Fosforo, Ferro, Tiamina, Riboflavina, Niacina, Folati, Vitamine A e C, Lisina, Istidina, Arginina, Acido aspartico, Treonina, Serina, Prolina, Glicina, Alanina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 13,
                'parent_id' => null,
                'name' => 'Uova',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 14,
                'parent_id' => 13,
                'name' => 'Uova Aia',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 15,
                'parent_id' => 13,
                'name' => 'Uova Carrefour Classic',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Riboflavina, niacina, tiamina, vitamina A, fosforo, sodio, potassio, calcio, magnesio, ferro, zinco, selenio, colina',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 16,
                'parent_id' => null,
                'name' => 'Latte senza lattosio',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Glucosio, galattosio, calcio',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 17,
                'parent_id' => 16,
                'name' => 'Latte senza lattosio Zymil',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Glucosio, galattosio, calcio',
                'picture' => 'xyz',
                'bought' => False,
            ],
            [
                'id' => 18,
                'parent_id' => 16,
                'name' => 'Latte senza lattosio Parmalat',
                'transportation' => 'xyz',
                'seasonality' => True,
                'packaging' => 'xyz',
                'procedure' => 'xyz',
                'ingredients' => 'Glucosio, galattosio, calcio',
                'picture' => 'xyz',
                'bought' => False,
            ],
        ];
        
        DB::table('products')->insert($products);
        /*Product::factory()
            ->count(50)
            ->create();*/
    }
}
