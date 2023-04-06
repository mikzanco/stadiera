<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_dishes = config('db.dishes');
        
        foreach($array_dishes as $dish_item) {
            $new_dish = new Dish();
            $new_dish->title = $dish_item['titolo']
        }
        dump($array_dishes);
    }
}
