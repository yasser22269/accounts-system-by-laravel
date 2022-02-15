<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->integer('basic_salary');
            $table->integer('department_id')->unsigned();
            $table->integer('manager_id')->nullable();
            $table->dateTime('date_of_employment');
            $table->tinyInteger('acvtive')->default(1);

            $table->foreign('department_id')->references('id')->on('departments')
                ->onDelete('cascade');
           // $table->tinyInteger('manger_of_department',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empolyees');
    }
}
