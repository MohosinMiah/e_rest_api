<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' =>$faker->randomNumber(3),
        'stock' => $faker->randomNumber(2),
        'discount' => $faker->randomNumber(2),
        

    ];
});
