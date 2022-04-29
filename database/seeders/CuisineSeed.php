<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuisine;

class CuisineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuisine::create(['cuisine' => 'North Indian']);
        Cuisine::create(['cuisine' => 'Kashmiri']);
        Cuisine::create(['cuisine' => 'Uttar Pradesh']);
        Cuisine::create(['cuisine' => 'Rajasthani']);
        Cuisine::create(['cuisine' => 'Mughalai']);
        Cuisine::create(['cuisine' => 'Gujarati']);
        Cuisine::create(['cuisine' => 'Bengali']);
        Cuisine::create(['cuisine' => 'Andhra']);
        Cuisine::create(['cuisine' => 'Goan']);
        Cuisine::create(['cuisine' => 'Tamilian']);
        Cuisine::create(['cuisine' => 'Kerala']);
        Cuisine::create(['cuisine' => 'Jain']);
    }
}
