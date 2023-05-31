<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('users')->insert([
                'name' => $fake->name,
                'email' => $fake->unique->email,
                'password' => $fake->password
            ]);
        }
    }
}
