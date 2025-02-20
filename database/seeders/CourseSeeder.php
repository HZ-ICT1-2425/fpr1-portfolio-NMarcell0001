<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'designation' => 'CU75001',
                'name' => 'Program- & Career Orientation',
                'ec_amount' => 2.5,
                'project' => 'Portfolio website (Presentation)',
                'timing' => 'Block 1',
                'status' => 'Completed',
                'grade_received' => 9.3,
                'overall_ec' => 2.5,
            ],
            [
                'designation' => 'CU75002',
                'name' => 'Computer Science Basics',
                'ec_amount' => 5,
                'project' => 'Written knowledge test',
                'timing' => 'Block 1',
                'status' => 'Completed',
                'grade_received' => 9.1,
                'overall_ec' => 7.5,
            ],
            [
                'designation' => 'CU75003',
                'name' => 'Programming Basics',
                'ec_amount' => 5,
                'project' => 'Written knowledge test',
                'timing' => 'Block 1',
                'status' => 'Completed',
                'grade_received' => 6.5,
                'overall_ec' => 12.5,
            ],
            [
                'designation' => 'CU75004',
                'name' => 'Object Oriented Programming',
                'ec_amount' => 5,
                'project' => 'Presentation',
                'timing' => 'Block 2',
                'status' => 'Completed',
                'grade_received' => 8.8,
                'overall_ec' => 22.5,
            ],
            [
                'designation' => 'CU75004',
                'name' => 'Object Oriented Programming',
                'ec_amount' => 5,
                'project' => 'Written knowledge test',
                'timing' => 'Block 2',
                'status' => 'Completed',
                'grade_received' => 8.6,
                'overall_ec' => 22.5,
            ],
            [
                'designation' => 'CU75068',
                'name' => 'Personal Professional Development: Exploration',
                'ec_amount' => 12.5,
                'project' => 'Criterion-referenced assessment',
                'timing' => 'Block 1-4',
                'status' => 'Underway',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => '-----',
                'name' => 'IT Personality',
                'ec_amount' => 2.5,
                'project' => 'Portfolio',
                'timing' => 'Block 2-4',
                'status' => 'Underway',
                'grade_received' => null,
                'overall_ec' => 23.75,
            ],
            [
                'designation' => 'CU75081',
                'name' => 'Business IT Consultancy Basics',
                'ec_amount' => 2.5,
                'project' => 'Assignment',
                'timing' => 'Block 3-4',
                'status' => 'Underway',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75080',
                'name' => 'Framework Project 1',
                'ec_amount' => 5,
                'project' => 'Written knowledge test',
                'timing' => 'Block 3',
                'status' => 'Underway',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75080',
                'name' => 'Framework Project 1',
                'ec_amount' => 1.25,
                'project' => 'Database exam',
                'timing' => 'Block 3',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75080',
                'name' => 'Framework Project 1',
                'ec_amount' => 2.5,
                'project' => 'Group presentation',
                'timing' => 'Block 3',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75080',
                'name' => 'Framework Project 1',
                'ec_amount' => 1.25,
                'project' => 'Individual requirements',
                'timing' => 'Block 3',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75011',
                'name' => 'Framework Project 2',
                'ec_amount' => 2.5,
                'project' => 'Delivery',
                'timing' => 'Block 4',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75011',
                'name' => 'Framework Project 2',
                'ec_amount' => 2.5,
                'project' => 'Report of assessment',
                'timing' => 'Block 4',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
            [
                'designation' => 'CU75011',
                'name' => 'Framework Project 2',
                'ec_amount' => 5,
                'project' => 'IT Devt portfolio',
                'timing' => 'Block 4',
                'status' => 'Not started',
                'grade_received' => null,
                'overall_ec' => null,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}


