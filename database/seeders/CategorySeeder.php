<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'catergory_name' => 'Material'
        ]);
        Category::create([
            'catergory_name' => 'Home Design'
        ]);
        Category::create([
            'catergory_name' => 'Interior Design'
        ]);
        Category::create([
            'catergory_name' => 'Architecture'
        ]);
        Category::create([
            'catergory_name' => 'Landscape'
        ]);
        Category::create([
            'catergory_name' => 'Fashion'
        ]);
    }
}
