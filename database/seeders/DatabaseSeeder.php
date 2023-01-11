<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\Coordonee;
    use App\Models\Ingredient;
    use Illuminate\Database\Seeder;
    use App\Models\Produit;
    use App\Models\Category;
    use App\Models\Panier;

    class DatabaseSeeder extends Seeder {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {
            // \App\Models\User::factory(10)->create();

//            \App\Models\User::factory()->create([
//                'name' => 'Test',
//                'first_name' => 'User',
//                'email' => 'test@example.com',
//            ]);

//            Produit::factory(4)->has(Ingredient::factory()->count(2))
//                ->create([
//                    'photos' => '7up.jpg',
//                    'category_id' => '1'
//                ]);

//            Panier::factory(2)
//                ->has(Produit::factory()->has(Ingredient::factory()->count(2))
//                ->count(4)->create([
//                        'photos' => '7up.jpg',
//                        'category_id' => '1'
//                    ]))
//                ;




            Panier::factory(2)->create();
//            Coordonee::factory(3)->create();


        }

    }
