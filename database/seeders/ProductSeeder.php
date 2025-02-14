<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 4; $i++) {
        Product::create([
            'code' => "1$i",
            'nama' => "indomilk-$i",
            'deskripsi' => "susu-$i",
            'qty' => 100,
            'price' => 10000
               ]);  
        }
    }
}
