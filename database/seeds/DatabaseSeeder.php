<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name'  => 'Manuel Lemus',
            'email' => 'manuellemuslemus23@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        factory(App\Department::class, 30)->create();
        factory(App\Job::class, 30)->create();
        factory(App\Employee::class, 30)->create();
        factory(App\Salary::class, 30)->create();
        factory(App\Payroll::class, 30)->create();
        factory(App\PayrollDetail::class, 30)->create();






    }
}
