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
            'name' => 'UFC/ Box',
        ]);
        Category::create([
            'name' => 'Basketball',
        ]);
        Category::create([
            'name' => 'Fútbol Americano',
        ]);
        Category::create([
            'name' => 'Fútbol Soccer',
        ]);
        Category::create([
            'name' => 'Tenis',
        ]);
        Category::create([
            'name' => 'Béisbol',
        ]);

    }
}
