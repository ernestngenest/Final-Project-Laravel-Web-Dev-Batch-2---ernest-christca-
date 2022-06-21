<?php

namespace Database\Seeders;

use App\Models\ConstructorWorker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstructorWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConstructorWorker::factory(50)->create();
    }
}
