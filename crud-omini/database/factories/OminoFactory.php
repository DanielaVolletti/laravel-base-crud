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
        'role' => $faker -> randomElement($array = array ('CHEF','INGEGNERE ENERGETICO','ASSISTENTE DI DIREZIONE', 'INFERMIERE', 'SVILUPPATORE WEB', 'DESIGNER INDUSTRIALE', 'COMMERCIALISTA', 'CAMERIERE DI SALA', 'PROJECT MANAGER', 'STORE MANAGER', 'CONTABILE', 'AREA MANAGER'))
    ];
});
