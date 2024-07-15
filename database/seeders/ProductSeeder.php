<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

// 
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
// 

// class ProductSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//         Product::factory()->count(30)->create();

//         // 
//         $fake = Faker::create();

//         // Ciclo per creare più prodotti fittizi
//         for ($i = 0; $i < 20; $i++) {
//             $imagePath = $fake->image(public_path('storage/images'), 400, 300, null, false);

//             // Memorizza il percorso dell'immagine relativo
//             $imageFileName = basename($imagePath);

//             // Salva nel database il prodotto con l'immagine generata
//             \App\Models\Product::create([
//                 'name' => $fake->sentence,
//                 'description' => $fake->paragraph,
//                 'price' => $fake->randomFloat(2, 10, 100),
//                 'quantity' => $fake->numberBetween(1, 100),
//                 'image' => 'images/' . $imageFileName,
//             ]);
//         }
//         // 
//     }
// }


class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $image = $faker->image(storage_path('app/public/images'), 200, 100, null, false);

            DB::table('products')->insert([
                'name' => $faker->word,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'image' => $image,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

        
    

