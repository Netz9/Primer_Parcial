<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Project;  

class ProjectController extends Controller
{
    public function assignEmployeeToProject(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'project_id' => 'required|exists:projects,id',
            'assigned_date' => 'required|date',
        ]);

        $employee = Employee::findOrFail($validated['employee_id']);
        $projectId = $validated['project_id'];

        $currentProjectId = $employee->projects()->pluck('projects.id')->first();

        if ($currentProjectId) {
            return response()->json([
                'message' => "El empleado ya está asignado al proyecto con ID $currentProjectId.",
                'current_project_id' => $currentProjectId
            ], 400);
        }

        $employee->projects()->syncWithoutDetaching([
            $projectId => ['assigned_date' => $validated['assigned_date']]
        ]);

        return response()->json([
            'message' => "Empleado con ID {$validated['employee_id']} asignado al proyecto con ID {$projectId}.",
            'assigned_project_id' => $projectId
        ]);
    }
}
