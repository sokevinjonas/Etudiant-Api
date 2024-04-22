<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    
    public function index()
    {
        $all_prof = Professor::all();
        
    }
    
    public function store(Request $request){
        $data = $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'email'=> 'required|email|unique:professors,email',
            'numero_professeur'=> 'required|string',
            'department_id'=> 'required|integer',
        ]);
        $send = Professor::create($data);
        if($send){
            return response()->json([
                'status' => 'success',
                'message'=> 'Enregistered successfully'
            ]);
        }else {
            return response()->json([
                'status' => 'Error',
                'message'=> 'Enregistered error'
            ]);
        }
    }
    public function show($id)
    {
        $professeur_find = Professor::find($id);

        if($professeur_find)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Professeur found',
                'data' => $professeur_find
            ], 200);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Professeur not found',
            ], 404);
        }
    }
}