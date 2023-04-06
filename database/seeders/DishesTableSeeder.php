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
            $new_dish->title = $dish_item['titolo'];
            $new_dish->slug = Dish::generateSlug($new_dish->title);
            $new_dish->type = $dish_item['tipo'];
            $new_dish->image = $dish_item['src'];
            $new_dish->description = $dish_item['descrizione'];
            $new_dish->allergens = $dish_item['allergeni'];
            $new_dish->price = $dish_item['prezzo'];
            $new_dish->save();
        }
        // dump($array_dishes);
    }
}
