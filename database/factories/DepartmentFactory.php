<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    $departments_of_company = array("Informatica", "RRHH", "Contaduria");

    return [
        'user_id'       => 1,
        'name'          => $departments_of_company[array_rand($departments_of_company,1)],
        'description'   => $faker->text(800)
    ];
});
