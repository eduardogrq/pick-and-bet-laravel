<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
//            'id' => 1,
            'name' => Str::random(10),
            'lastName' => Str::random(10),
            'age' => Integer::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phoneNumber' => Int::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
