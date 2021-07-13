<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;
use Psy\Util\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eduardo',
            'lastName' => 'Quiñonez',
            'age' => 27,
            'email' => 'eduardo.grquinonez@gmail.com',
            'phoneNumber' => 7226137378,
            'password' => Hash::make('Tuyyosomos1mismo'),
        ])->assignRole('admin');

        User::factory(9)->create();

//        DB::table('users')->insert([
////            'id' => 1,
//            'name' => Str::random(10),
//            'lastName' => Str::random(10),
//            'age' => Integer::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'phoneNumber' => Int::random(10),
//            'password' => Hash::make('password'),
//        ]);
    }
}
