<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_employee()
    {
        $employee = Employee::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'hire_date' => now(),
            'position' => 'Developer',
            'salary' => 60000,
        ]);

        $this->assertDatabaseHas('employees', [
            'email' => 'john.doe@example.com',
        ]);
    }

    /** @test */
    public function it_updates_an_employee()
    {
        $employee = Employee::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'hire_date' => now(),
            'position' => 'Manager',
            'salary' => 70000,
        ]);

        $employee->update([
            'position' => 'Senior Manager',
            'salary' => 80000,
        ]);

        $this->assertDatabaseHas('employees', [
            'email' => 'jane.doe@example.com',
            'position' => 'Senior Manager',
            'salary' => 80000,
        ]);
    }

    /** @test */
    public function it_deletes_an_employee()
    {
        $employee = Employee::create([
            'first_name' => 'Mark',
            'last_name' => 'Smith',
            'email' => 'mark.smith@example.com',
            'hire_date' => now(),
            'position' => 'Analyst',
            'salary' => 50000,
        ]);

        $employee->delete();

        $this->assertDatabaseMissing('employees', [
            'email' => 'mark.smith@example.com',
        ]);
    }
}
