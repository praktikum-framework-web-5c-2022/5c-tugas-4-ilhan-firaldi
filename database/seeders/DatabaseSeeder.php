<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah as Matkul;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Matkul::factory()->count(30)->create();
    }
}
