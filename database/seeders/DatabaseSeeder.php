<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorieSeed::class);
        $this->call(CuisineSeed::class);
        $this->call(IngredientSeed::class);
        $this->call(MeasurementSeed::class);
    }
}
