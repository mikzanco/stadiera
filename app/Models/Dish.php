<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dish extends Model
{
    use HasFactory;

    public static function generateSlug($string){

        $slug = Str::slug($string, '-');

        $new_slug = $slug;
        $c=1;
        $museum_exists = Dish::where('slug', $slug)->first();
        while($Dish_exists){
            $slug = $new_slug . '-' .$c;
            $Dish_exists = Dish::where('slug', $slug)->first();
            $c++;


        }
        return $slug;

    }
}
