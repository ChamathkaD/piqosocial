<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();

        DB::table('languages')->insert([
            ['name' => 'Sinhala'],
            ['name' => 'English'],
            ['name' => 'Singlish'],
            ['name' => 'Chinese'],
            ['name' => 'Russian'],
        ]);
    }
}
