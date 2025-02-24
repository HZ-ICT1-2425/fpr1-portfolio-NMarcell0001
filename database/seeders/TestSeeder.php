<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;
use App\Models\Course;

class TestSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::first();

        if ($course) {
            Test::create([
                'course_id' => $course->id,
                'exam_name' => 'PCO Website Portfolio Showcase',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 9.3,
            ]);
            Test::create([
                'course_id' => $course->id,
                'exam_name' => 'CSB Written Exam',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 9.1,
            ]);
        }
    }
}
