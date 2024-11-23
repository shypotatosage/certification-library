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
            'id' => 1,
            'name' => 'Romance'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Literature'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'Historical'
        ]);
        Category::create([
            'id' => 4,
            'name' => 'Fantasy'
        ]);
        Category::create([
            'id' => 5,
            'name' => 'Action'
        ]);
        Category::create([
            'id' => 6,
            'name' => 'Adventure'
        ]);
        Category::create([
            'id' => 7,
            'name' => 'Science'
        ]);
        Category::create([
            'id' => 8,
            'name' => 'Novel'
        ]);
        Category::create([
            'id' => 9,
            'name' => 'Tragedy'
        ]);
    }
}
