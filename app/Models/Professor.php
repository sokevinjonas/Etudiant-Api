<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'email', 'numero_professeur', 'department_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function departmentHead()
    {
        return $this->hasOne(DepartmentHead::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'teacher_module');
    }
}