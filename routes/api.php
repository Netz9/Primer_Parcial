<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para el CRUD de empleados
Route::post('/employees', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');// Ruta para crear un nuevo empleado
Route::get('/employees', 'App\Http\Controllers\EmployeeController@index')->name('employees.index');// Ruta para obtener todos los empleados
Route::get('/employees/{employee}', 'App\Http\Controllers\EmployeeController@show')->name('employees.show');// Ruta para obtener un empleado específico
Route::put('/employees/{employee}', 'App\Http\Controllers\EmployeeController@update')->name('employees.update');// Ruta para actualizar un empleado existente
Route::delete('/employees/{employee}', 'App\Http\Controllers\EmployeeController@destroy')->name('employees.destroy');// Ruta para eliminar un empleado

// Rutas para el CRUD de proyectos
Route::get('/projects', 'App\Http\Controllers\EmployeeProjectController@index')->name('projects.index'); // Listar todos los proyectos
Route::post('/projects', 'App\Http\Controllers\EmployeeProjectController@store')->name('projects.store'); // Crear un nuevo proyecto
Route::get('/projects/{project}', 'App\Http\Controllers\EmployeeProjectController@show')->name('projects.show'); // Ver detalles de un proyecto específico
Route::put('/projects/{project}', 'App\Http\Controllers\EmployeeProjectController@update')->name('projects.update'); // Actualizar un proyecto existente

// Ruta para asignar empleados a proyectos
Route::post('/projects/assign', 'App\Http\Controllers\ProjectController@assignEmployeeToProject')->name('projects.assignEmployee');// Ruta para asignar un empleado a un proyecto


