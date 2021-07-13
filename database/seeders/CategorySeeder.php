<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Category::factory(2)->create();

        Category::create([
            'name' => 'box',
        ]);
        Category::create([
            'name' => 'basketball',
        ]);
        Category::create([
            'name' => 'americano',
        ]);
        Category::create([
            'name' => 'soccer',
        ]);
        Category::create([
            'name' => 'tenis',
        ]);
        Category::create([
            'name' => 'baseball',
        ]);

    }
}
