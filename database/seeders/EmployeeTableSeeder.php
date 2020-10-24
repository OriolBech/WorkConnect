<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->name = 'Robb';
        $employee->lastname = 'Stark';
        $employee->email = 'test@example.com';
        $employee->phone = '999999999';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Khal';
        $employee->lastname = 'Drogo';
        $employee->email = 'test@example.com';
        $employee->phone = '999999999';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Arya';
        $employee->lastname = 'Stark';
        $employee->email = 'test@example.com';
        $employee->phone = '999999999';
        $employee->save();
    }
}
