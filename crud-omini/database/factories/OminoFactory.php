<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
        'firstName' => $faker -> firstName(),
        'lastName' => $faker -> lastName(),
        'address' => $faker -> streetAddress(),
        'code' => $faker -> postcode(),
        'state' => $faker -> state(),
        'phoneNumber' => $faker -> e164PhoneNumber(),
        'role' => $faker -> randomElement($array = array ('chef','ingegnere energetico','assistente di direzione', 'infermiere', 'sviluppatore web', 'designer industriale', 'commercialista', 'cameriere di sala', 'project manager', 'store manager', 'contabile', 'area manager'))
    ];
});
