<?php

namespace Database\Seeders;

use Database\Factories\ProductUserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ProductUserFactory::new()->count(10)->create();
    }
}
