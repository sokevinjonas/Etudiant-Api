<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentHead extends Model
{
    use HasFactory;

    protected $fillable = [
        'professor_id', 'department_id'
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}