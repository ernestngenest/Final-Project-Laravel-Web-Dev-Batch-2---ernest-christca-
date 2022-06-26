<?php

namespace Database\Seeders;

use App\Models\InteriorDesign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteriorDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InteriorDesign::factory(50)->create();
    }
}
