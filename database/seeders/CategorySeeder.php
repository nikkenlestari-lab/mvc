<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Category::create([
        'name' => 'Makanan',
        'slug' => 'makanan',
    ]);

    \App\Models\Category::create([
        'name' => 'Minuman',
        'slug' => 'minuman',
    ]);

    \App\Models\Category::create([
        'name' => 'Kebutuhan Rumah Tangga',
        'slug' => 'kebutuhan-rumah-tangga',
    ]);

    \App\Models\Category::create([
        'name' => 'Obat-obatan',
        'slug' => 'obat-obatan',
    ]);
}
}
