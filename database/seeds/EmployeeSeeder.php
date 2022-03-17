<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = config('employees.data');
        foreach ($employees as $employee) {
            $_employee = new Employee();
            $_employee->name = $employee['name'];
            $_employee->surname = $employee['surname'];
            $_employee->save();
        }
    }
}
