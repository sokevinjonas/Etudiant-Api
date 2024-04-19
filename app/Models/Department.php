<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_department', 'description'
    ];

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }

    public function departmentHead()
    {
        return $this->hasOne(DepartmentHead::class);
    }
}