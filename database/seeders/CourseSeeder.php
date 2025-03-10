<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'cu_code' => 'CU75001',
                'course_name' => 'Program- & Career Orientation',
                'credits' => 2.5,
                'passed_at' => Carbon::now()->subMonths(100),
                'exam_name' => 'PCO Website Portfolio Showcase',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 9.3,
            ],
            [
                'cu_code' => 'CU75002',
                'course_name' => 'Computer Science Basics',
                'credits' => 5.0,
                'passed_at' => Carbon::now()->subMonths(100),
                'exam_name' => 'CSB Written Exam',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 9.1,
            ],
            [
                'cu_code' => 'CU75003',
                'course_name' => 'Programming Basics',
                'credits' => 5.0,
                'passed_at' => Carbon::now()->subMonths(100),
                'exam_name' => 'PBA Exam',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 6.5,
            ],
            [
                'cu_code' => 'CU75004',
                'course_name' => 'Object Oriented Programming',
                'credits' => 5.0,
                'passed_at' => Carbon::now()->subMonths(100),
                'exam_name' => 'OOP Theoretical Exam',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 8.6,
            ],
            [
                'cu_code' => 'CU75004',
                'course_name' => 'Object Oriented Programming',
                'credits' => 5.0,
                'passed_at' => Carbon::now()->subMonths(100),
                'exam_name' => 'OOP Group Project Presentation',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => 8.8,
            ],
            [
                'cu_code' => 'CU75068',
                'course_name' => 'Personal Professional Development: Exploration',
                'credits' => 12.5,
                'passed_at' => null,
                'exam_name' => 'PPDE Assessment',
                'weighing_factor' => 1,
                'lowest_passing_grade' => 5.50,
                'best_grade' => null,
            ],
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert(array_merge($course, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
