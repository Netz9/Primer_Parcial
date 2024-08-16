<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'description', 'start_date', 'end_date', 'completion_percentage'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_project')
                    ->withPivot('assigned_date')
                    ->withTimestamps();
    }
}