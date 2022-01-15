<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    $job_position = array("Empleado", "Supervisor", "Jefatura", "Servicio");
    return [
        'user_id'       => 1,
        'department_id' => $faker->numberBetween(1, 10),
        'name'          => $job_position[array_rand($job_position,1)],
        'description'   => $faker->text(800)
    ];
});
