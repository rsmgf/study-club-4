<?php

namespace Database\Seeders;

use Database\Seeder\StudentSeeder;
use Database\Seeders\StudentSeeder as SeedersStudentSeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // public function run(): void
    // {
        
        
    //     $this->call(SeedersStudentSeeder::class);


    // } --------------For StudentSeeder
    public function run(): void
    {
        
        $this->call(ProductSeeder::class);


    }
}

//-------------Bisa Gini--------------
// <?php

// namespace Database\Seeders;

// use Database\Seeders\StudentSeeder;
// use Illuminate\Database\Seeder;

// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      */
//     public function run(): void
//     {
        
        
//         $this->call(StudentSeeder::class);


//     }
// }
