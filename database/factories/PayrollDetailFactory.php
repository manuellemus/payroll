<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PayrollDetail;
use Faker\Generator as Faker;

$factory->define(PayrollDetail::class, function (Faker $faker) {
    $salaries = array(400, 600, 1000, 100,1500, 2000);

    return [
        'user_id'       => 1,
        'employee_id'   => $faker->numberBetween(1, 5),
        'salary_id'     => $faker->numberBetween(1, 5),
        'payroll_id'     => $faker->numberBetween(1, 30),        
        'salary'        => $salaries[array_rand($salaries,1)],
        'afp'           => $faker->randomFloat(2, 10, 150),
        'isss'          => $faker->randomFloat(2, 5, 50),
        'renta'         => $faker->numberBetween(10, 100),
        'date'          => $faker->date('Y-m-d', 'now'),
        'discount'      => $faker->randomFloat(2, 50, 300),
        'bonus'         => 100,
        'comment'       => $faker->text(800)
    ];
});
