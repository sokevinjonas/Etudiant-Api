<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'professor_id', 'module_id'
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}