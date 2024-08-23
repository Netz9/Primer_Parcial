<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Project;
use App\Models\Alert;
use Carbon\Carbon;

class GenerateAlerts extends Command
{
    protected $signature = 'alerts:generate';
    protected $description = 'Genera alertas para proyectos próximos a cumplir su fecha de entrega';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $currentDate = Carbon::now();
        $limitDate = $currentDate->copy()->addWeek();

        $projects = Project::whereBetween('end_date', [$currentDate, $limitDate])->get();

        foreach ($projects as $project) {
            Alert::updateOrCreate(
                ['project_id' => $project->id],
                ['message' => 'El proyecto está próximo a cumplir su fecha de entrega']
            );
        }
    }
}