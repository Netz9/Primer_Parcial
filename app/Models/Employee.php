<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'hire_date', 'position', 'salary'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'employee_project')
                    ->withPivot('assigned_date')
                    ->withTimestamps();
    }
}
