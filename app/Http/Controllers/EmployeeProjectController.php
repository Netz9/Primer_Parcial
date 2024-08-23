<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Alert;
use Illuminate\Http\Request;

class EmployeeProjectController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'completion_percentage' => 'required|numeric|between:0,100',
        ]);

        $project = Project::create($validated);

        $currentDate = now();

        $limitDate = $currentDate->copy()->addWeek();

        if ($project->end_date >= $currentDate && $project->end_date <= $limitDate) {
            Alert::updateOrCreate(
                ['name' => 'Alerta para ' . $project->name],
                [
                    'description' => 'El proyecto ' . $project->name . ' está próximo a cumplir su fecha de entrega.',
                    'start_date' => $currentDate,
                    'end_date' => $project->end_date,
                    'completion_percentage' => $project->completion_percentage,
                ]
            );
        }

        return response()->json(['message' => 'Proyecto creado y alerta generada con éxito si corresponde'], 200);
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

    public function alerts()
    {
        $currentDate = now();

        $limitDate = $currentDate->copy()->addWeek();

        $projects = Project::whereBetween('end_date', [$currentDate, $limitDate])->get();

        return response()->json($projects, 200);
    }


    public function storeAlert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'completion_percentage' => 'required|numeric|between:0,100',
        ]);

        Alert::create($validated);

        return response()->json(['message' => 'Alerta creada con éxito'], 200);
    }

    public function indexAlerts()
    {
        $alerts = Alert::all();
        return response()->json($alerts, 200);
    }

    public function showAlert(Alert $alert)
    {
        return response()->json($alert, 200);
    }

    public function updateAlert(Request $request, Alert $alert)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date|after_or_equal:start_date',
            'completion_percentage' => 'sometimes|numeric|between:0,100',
        ]);

        $alert->update($validated);

        return response()->json(['message' => 'Alerta actualizada con éxito'], 200);
    }

    public function destroyAlert(Alert $alert)
    {
        $alert->delete();
        return response()->json(['message' => 'Alerta eliminada con éxito'], 200);
    }
}
