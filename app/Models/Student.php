<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'email', 'numero_etudiant', 'date_naissance', 'genre', 'filiere_id'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}