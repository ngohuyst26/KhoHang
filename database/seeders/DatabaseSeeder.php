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
        // User::factory(10)->create();

        //        User::factory()->create([
        //            'name' => 'Ngô Huy',
        //            'email' => 'ngohuyst77@gmail.com',
        //            'password' => bcrypt('123'),
        //        ]);

        $this->call([
            CustomerSeeder::class
        ]);
    }
}
