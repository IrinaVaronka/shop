<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'kiwi',
            'email' => 'kiwi@gmail.com',
            'password' => Hash::make('123'),
        ]);

        $tech = ['mobile-phones', 'computers', 'home-technics'];

        foreach ($tech as $key => $value) {
        DB::table('cats')->insert([
                'name' => $tech[$key]
            ]);
        }




    }
}
