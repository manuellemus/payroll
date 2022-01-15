<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payroll;
use Faker\Generator as Faker;

$factory->define(Payroll::class, function (Faker $faker) {
    $salaries = array(400, 600, 1000, 100,1500, 2000);

    return [
        'user_id'           => 1,
        'total_amount'      => $faker->randomFloat(2, 100, 500),
        'total_discount'    => $faker->randomFloat(2, 50, 300),
        'date'              => $faker->date('Y-m-d', 'now')


    ];
});
