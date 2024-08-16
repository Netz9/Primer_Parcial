<?php

namespace App\Http\Controllers;
use App\Models\Employee; 

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees',
            'hire_date' => 'required|date',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);
    
        $employee = Employee::create($validated);
    
        return response()->json(['message' => 'Empleado creado con éxito'], 200);  
    }
    
    public function show(Employee $employee)
    {
        return $employee;
    }
    
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:employees,email,' . $employee->id,
            'hire_date' => 'sometimes|date',
            'position' => 'sometimes|string|max:255',
            'salary' => 'sometimes|numeric',
        ]);
    
        $employee->update($validated);
    
        return response()->json(['message' => 'Empleado actualizado con éxito'], 200);
    }
    
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['message' => 'Empleado eliminado con éxito'], 200);
    }
}
