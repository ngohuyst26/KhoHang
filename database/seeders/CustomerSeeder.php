<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ],
            [
                'name' => 'Bùi Trọng Phúc',
                'phone' => '0796875647',
                'city_name' => 'Cần Thơ',
                'date_of_birth' => '2024/07/03',
                'address' => 'Cần Thơ',
                'customer_type' => '1',
                'tax_code' => '',
                'email' =>  Str::random(10) . '@example.com',
                'facebook' => '',
                'status' => '0',
                'notes' => '',
            ]

        ]);
    }
}
