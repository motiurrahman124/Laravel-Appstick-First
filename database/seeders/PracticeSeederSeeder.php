<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PracticeSeeder;
use Illuminate\Support\Str;

class PracticeSeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PracticeSeeder::factory()->count(20)->create();
        
        
        // PracticeSeeder::insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'address' => Str::random(20),
        // ]);
    }
}
