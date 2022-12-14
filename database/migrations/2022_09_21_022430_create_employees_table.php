<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('email');
            $table->string('emp_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('ext')->nullable();
            $table->dateTime('dob');
            $table->string('sex');
            $table->string('desg');
            $table->string('department_id');
            $table->dateTime('join_date');
            $table->string('nickname')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('econtact_no')->nullable();
            $table->string('ename')->nullable();
            $table->string('rel')->nullable();
            $table->string('pres_add')->nullable();
            $table->string('pro_add')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
