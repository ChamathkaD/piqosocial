<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->delete();

        foreach (Hobby::hobbiesCollection() as $value) {
            DB::table('hobbies')->insert([
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
