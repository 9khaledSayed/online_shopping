<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;


$factory->define(\App\Product::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ar_J0');
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'price' => $faker->randomFloat(2, 50, 200),
        'sale_price' => $faker->randomFloat(2, 10, 30),
        'volume' => $faker->numberBetween(90, 200),
        'quantity' => $faker->numberBetween(90, 200),
        'image1' => $faker->image($dir = 'public/storage/products', $width = 640, $height = 480, 'computer', false, true, 'Faker'),
        'image2' => $faker->image($dir = 'public/storage/products', $width = 640, $height = 480, 'computer', false, true, 'Faker'),
        'image3' => $faker->image($dir = 'public/storage/products', $width = 640, $height = 480, 'computer', false, true, 'Faker'),
    ];
});
