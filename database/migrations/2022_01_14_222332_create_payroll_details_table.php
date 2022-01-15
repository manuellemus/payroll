<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_details', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('salary_id')->unsigned();
            $table->bigInteger('payroll_id')->unsigned();


            $table->float('salary', 8, 2);
            $table->float('afp', 8, 2);
            $table->float('isss', 8, 2);
            $table->float('renta', 8, 2);
            $table->date('date');
            $table->float('discount', 8, 2);
            $table->float('bonus', 8, 2);
            $table->text('comment')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('salary_id')->references('id')->on('salaries');
            $table->foreign('payroll_id')->references('id')->on('payrolls');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payroll_details');
    }
}
