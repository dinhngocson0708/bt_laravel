<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([[
            'name'=>'Banh cam',
            'price'=>5
        ],
        [
            'name'=>'Banh ÍT',
            'price'=>5
        ]
    ]);
    }
}
