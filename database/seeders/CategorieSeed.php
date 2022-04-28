<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['category' => 'Snack']);
        Category::create(['category' => 'Side Dish']);
        Category::create(['category' => 'Soup']);
        Category::create(['category' => 'Dessert']);
        Category::create(['category' => 'Chat']);
        Category::create(['category' => 'Breakfast']);
        Category::create(['category' => 'Lunch']);
        Category::create(['category' => 'Dinner']);
        Category::create(['category' => 'Brunch']);
    }
}
