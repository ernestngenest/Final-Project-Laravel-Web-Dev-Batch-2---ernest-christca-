<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\DesignerSeeder;
use Database\Seeders\MaterialSeeder;
use Database\Seeders\HomeDesignSeeder;
use Database\Seeders\InteriorDesignSeeder;
use Database\Seeders\ConstructorWorkerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HomeDesignSeeder::class,
            DesignerSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            InteriorDesignSeeder::class,
            MaterialSeeder::class,
            InteriorDesignSeeder::class,
            ConstructorWorkerSeeder::class,
        ]);
    }
}
