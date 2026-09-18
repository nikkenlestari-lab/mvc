<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'PT. Indofood',
                'phone' => '021-57958822',
                'address' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PT. Unilever Indonesia',
                'phone' => '021-80827000',
                'address' => 'Tangerang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PT. Mayora Indah',
                'phone' => '021-80637777',
                'address' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}