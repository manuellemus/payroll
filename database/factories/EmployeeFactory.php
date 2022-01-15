<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'user_id'       => 1,
        'department_id' => $faker->numberBetween(1, 5),
        'department_id' => $faker->numberBetween(1, 5),
        'job_id'        => $faker->numberBetween(1, 5),
        'name'          => $faker->name,
        'last_name'     => $faker->lastName,
        'address'       => $faker->address,
        'telephone'     => $faker->phoneNumber
    ];
});
