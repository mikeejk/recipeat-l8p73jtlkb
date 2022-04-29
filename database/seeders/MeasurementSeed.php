<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Measurement;

class MeasurementSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measurement::create(['measurement' => 'Gm']);
        Measurement::create(['measurement' => 'Kg']);
        Measurement::create(['measurement' => 'Ml']);
        Measurement::create(['measurement' => 'Cup']);
        Measurement::create(['measurement' => 'Tsp']);
        Measurement::create(['measurement' => 'Pinch']);
    }
}
