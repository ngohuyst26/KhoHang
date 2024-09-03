<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder{

    /**
     * Seed the application's database.
     */
    public function run()
    : void{
        //        User::factory(10)->create();

        //        User::factory()->create([
        //            'name'     => 'Admin',
        //            'email'    => 'admin@gmail.com',
        //            'password' => bcrypt('123'),
        //        ]);
        //        Category::factory(5)->create([
        //            'name'        => fake()->name,
        //            'description' => 'hong có'
        //        ]);
        //        Supplier::factory([
        //            'name'  => fake()->company,
        //            'email' => fake()->companyEmail,
        //        ]);
        //        StorageLocation::factory([
        //            [
        //                'name' => 'Kệ a'
        //            ],
        //            [
        //                'name' => 'Kệ b'
        //            ]
        //        ]);
        $this->call([
            CustomerSeeder::class
        ]);
    }
}
