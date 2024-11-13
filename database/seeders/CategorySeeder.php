<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Technology',
            'slug' => 'web-technology'
        ]);

        Category::create([
            'name' => 'Mobile Technology',
            'slug' => 'mobile-technology'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);
    }
}
