<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Computers', 'slug' => 'computers']);
        Category::create(['name' => 'Books', 'slug' => 'books']);
        Category::create(['name' => 'Video Games', 'slug' => 'video-games']);
        Category::create(['name' => 'Food', 'slug' => 'food']);
    }
}
