<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salary;
use Faker\Generator as Faker;

$factory->define(Salary::class, function (Faker $faker) {
    $salaries = array(400, 600, 1000, 100,1500, 2000);
    return [
        'user_id'       => 1,
        'employee_id'   => $faker->numberBetween(1, 5),
        'salary_amount' => $salaries[array_rand($salaries,1)],
        'currency'      => 'USD'
    ];
});
