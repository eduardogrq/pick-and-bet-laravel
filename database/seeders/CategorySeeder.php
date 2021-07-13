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
        Category::factory(2)->create();
//        DB::table('categories')->insert([
////            'id' => 1,
//            'name' => Str::random(2),
//        ]);
    }
}
