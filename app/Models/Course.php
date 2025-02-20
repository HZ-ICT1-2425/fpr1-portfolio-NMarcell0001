<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation', 'name', 'ec_amount', 'project', 'timing',
        'status', 'grade_received', 'overall_ec', 'passed_at'
    ];
}
