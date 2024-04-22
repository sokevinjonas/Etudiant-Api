<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        
    }

    public function store(Request $request){
        $data = $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'email'=> 'required|email|unique:students',
            'numero_etudiant' => 'required|string',
            'date_naissance'=> 'required|date',
            'genre'=> 'required|string',
            'filiere_id'=> 'required|integer',
        ]);

        $students = Student::create($data);

        if($students){
            return response()->json([
                "status" => "success",
                "message" => "Etudiant creer avec success"
            ], 200);
        } else{
            return response()->json([
                "status" => "error",
                "message" => "Une erreur est survenu"
            ], 404);
        }
    }
    
    public function show($id)
    {
        $student = Student::where('id', $id)->exists();
        if($student){
            $infos_student = Student::find($id);
            return response()->json([
                "status" => "success",
                "message" => "Etudiant retrouver avec succes",
                "data" => $infos_student
            ], 200); 
        }else{
            return response()->json([
                "status" => "error",
                "message" => "Aucun etudiant retrouver"
            ], 404); 
        }
        
    }
    public function update(Request $request, $id){
        $student = Student::where('id', $id)->exists();
        if ($student) 
        {
            $infos_student = Student::find($id);
            $infos_student->nom = $request->nom;
            $infos_student->prenom = $request->prenom;
            $infos_student->email = $request->email;
            $infos_student->date_naissance = $request->date_naissance;
            $infos_student->genre = $request->genre;
            $infos_student->filiere_id = $request->filiere_id;
            
            $infos_student->update();
            return response()->json([
                "status" => "success",
                "message" => "Étudiant modifié avec succès"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Étudiant non trouvé"
            ]);
        }
    }
    public function delete($id){
        $student = Student::find($id);
        if($student){
            $student->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Student deleted successfully',
            ], 200);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Une erreur est survenue',
            ], 404);
        }
    }
    

}