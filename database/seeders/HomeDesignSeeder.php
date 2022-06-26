<?php

namespace Database\Seeders;

use App\Models\HomeDesign;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeDesign::factory(50)->create();
    }
}
