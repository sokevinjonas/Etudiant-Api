<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'filiere_id', 'professor_id'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_module');
    }
}