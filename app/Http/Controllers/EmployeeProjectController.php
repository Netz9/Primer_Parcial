<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class EmployeeProjectController extends Controller
{
        public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'completion_percentage' => 'numeric|between:0,100',
        ]);

        $project = Project::create($validated);

        return response()->json(['message' => 'Proyecto creado con éxito'], 200);
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date|after_or_equal:start_date',
            'completion_percentage' => 'sometimes|numeric|between:0,100',
        ]);

        $project->update($validated);

        return response()->json(['message' => 'Proyecto actualizado con éxito'], 200);
    }

}
