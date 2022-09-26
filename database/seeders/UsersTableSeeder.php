<?php

namespace Database\Seeders;

use DateTime;
use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('employees')->truncate();
        DB::table('departments')->truncate();
        $employeeRole = Role::where('name', 'employee')->first();
        $adminRole =  Role::where('name', 'admin')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $employee = User::create([
            'name' => 'Employee',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456')
        ]);

        // 
        $employee->roles()->attach($employeeRole);
        $dob = new DateTime('1997-09-15');
        $join = new DateTime('2020-01-15');
        $admin->roles()->attach($adminRole);
        $employee = Employee::create([
            'user_id' => $employee->id,
            'email' => 'user@gmail.com',
            'emp_id' => 'NS-0001',
            'first_name' => 'Test ',
            'middle_name' => 'Test',
            'last_name' => 'Test',
            'ext' => '',
            'dob' => $dob->format('Y-m-d'),
            'sex' => 'Male',
            'desg' => 'Engineer',
            'department_id' => '1',
            'join_date' => $join->format('Y-m-d'),
            
        ]);

        Department::create(['name' => 'Offshore']);
        Department::create(['name' => 'Admin']);
        Department::create(['name' => 'Teacher']);
        Department::create(['name' => 'Accounting']);

    }
}


