<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'category' => $faker->randomElement([
            Book::TYPE_ONE,
            Book::TYPE_TWO,
            Book::TYPE_THREE,
            Book::TYPE_FOUR,
            Book::TYPE_FIVE,
            Book::TYPE_SIX,
            Book::TYPE_SEVEN,
            Book::TYPE_EIGHT,
            Book::TYPE_DEFAULT,
        ]),
        'auth' => $faker->name(),
        'publisher' => $faker->address(),
        'translator' => $faker->name(),
        'country' => $faker->address(),
        'quantity' => $faker->numberBetween(10, 50),
        'price' => $faker->numberBetween(100000, 500000),
        'year_start' => $faker->numberBetween(1900, 2021),
        'created_by' => 1
    ];
});
