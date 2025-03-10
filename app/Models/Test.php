<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'weighing_factor',
        'lowest_passing_grade',
        'best_grade'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
