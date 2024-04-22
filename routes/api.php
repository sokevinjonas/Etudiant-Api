<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;

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

//Api Students
Route::get('liste-etudiants', [StudentController::class, 'index']);
Route::get('detail-etudiant/{id}', [StudentController::class, 'show']);
Route::post('enregistrer-un-etudiant', [StudentController::class, 'store']);
Route::put('update-etudiant/{id}', [StudentController::class, 'update']);
Route::delete('delete-un-edtudiant/{id}', [StudentController::class, 'delete']);

//Api Professeur
Route::post('add-professor', [ProfessorController::class, 'store']);
Route::get('found-professor/{id}', [ProfessorController::class, 'show']);