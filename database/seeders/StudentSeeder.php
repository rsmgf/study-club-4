<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Student; 

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Student::create([
                'nim' => "F1E123066$i",
                'name' => "Raihan ke-$i",
                'prodi' => "Sistem Informasi$i",
                'angkatan' => 2000 + $i,
                'alamat' => "Somewhere"
               ]);      
        }
        
        Student::create([
            'nim' => str::random(8),
            'name' => str::random(20),
            'prodi' => str::random(16),
            'angkatan' => rand(2024, 2023),
            'alamat' => str::random(50)
           ]);  
    }
}
