<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
  return [
      'title' => $faker->name,
      'authore' => $faker->name,
      'pages' => $number,
      'price' => $number,
      'date' => now(),
      'sold' => $number
  ];
});
