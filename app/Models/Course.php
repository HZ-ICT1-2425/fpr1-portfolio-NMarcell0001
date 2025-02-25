<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'cu_code', 'course_name', 'credits', 'passed_at', 'created_at', 'updated_at', 'weighing_factor',
        'lowest_passing_grade',
        'best_grade', 'exam_name'
    ];

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
