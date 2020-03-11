<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banque;
use App\Company;
use App\Wallet;
use Faker\Generator as Faker;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
        'tags' => $faker->randomElement(['Business', 'Professional']),
        'type' => $faker->randomElement(['Spend', 'Income']),
        'amount' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'file' => $faker->mimeType,
        'date' => $faker->date($format = 'Y-m-d'),
        'company_id' =>Company::all()->random()->id,
        'banque_id' => Banque::all()->random()->id,
    ];
});
