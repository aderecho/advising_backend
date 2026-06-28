<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MockDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Departments/Colleges (at least 10)
        $colleges = [
            ['id' => 1, 'college_name' => 'College of Science', 'college_abbrev' => 'CS'],
            ['id' => 2, 'college_name' => 'College of Communication, Art, and Design', 'college_abbrev' => 'CCAD'],
            ['id' => 3, 'college_name' => 'College of Social Sciences', 'college_abbrev' => 'CSS'],
            ['id' => 4, 'college_name' => 'School of Management', 'college_abbrev' => 'SOM'],
            ['id' => 5, 'college_name' => 'College of Engineering', 'college_abbrev' => 'COE'],
            ['id' => 6, 'college_name' => 'College of Nursing', 'college_abbrev' => 'CN'],
            ['id' => 7, 'college_name' => 'College of Education', 'college_abbrev' => 'CED'],
            ['id' => 8, 'college_name' => 'College of Law', 'college_abbrev' => 'LAW'],
            ['id' => 9, 'college_name' => 'College of Medicine', 'college_abbrev' => 'CM'],
            ['id' => 10, 'college_name' => 'College of Architecture', 'college_abbrev' => 'CA'],
        ];
        
        DB::table('amis_colleges')->truncate();
        DB::table('amis_colleges')->insert($colleges);

        // 2. Programs (at least 10)
        $programs = [
            ['program_id' => 1, 'acronym' => 'BSCS', 'title' => 'BS Computer Science', 'career' => 'UG', 'college' => 'CS', 'description' => 'BS Computer Science', 'degree_id' => 1, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 2, 'acronym' => 'BSIT', 'title' => 'BS Information Technology', 'career' => 'UG', 'college' => 'CS', 'description' => 'BS Information Technology', 'degree_id' => 1, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 3, 'acronym' => 'BSBio', 'title' => 'BS Biology', 'career' => 'UG', 'college' => 'CS', 'description' => 'BS Biology', 'degree_id' => 1, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 4, 'acronym' => 'BFA', 'title' => 'Bachelor of Fine Arts', 'career' => 'UG', 'college' => 'CCAD', 'description' => 'Bachelor of Fine Arts', 'degree_id' => 2, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 5, 'acronym' => 'BACom', 'title' => 'BA Communication', 'career' => 'UG', 'college' => 'CCAD', 'description' => 'BA Communication', 'degree_id' => 2, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 6, 'acronym' => 'BAPsy', 'title' => 'BA Psychology', 'career' => 'UG', 'college' => 'CSS', 'description' => 'BA Psychology', 'degree_id' => 2, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 7, 'acronym' => 'BAPolSci', 'title' => 'BA Political Science', 'career' => 'UG', 'college' => 'CSS', 'description' => 'BA Political Science', 'degree_id' => 2, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 8, 'acronym' => 'BSMgt', 'title' => 'BS Management', 'career' => 'UG', 'college' => 'SOM', 'description' => 'BS Management', 'degree_id' => 1, 'duration_years' => 4, 'is_visible' => true],
            ['program_id' => 9, 'acronym' => 'BSCE', 'title' => 'BS Civil Engineering', 'career' => 'UG', 'college' => 'COE', 'description' => 'BS Civil Engineering', 'degree_id' => 1, 'duration_years' => 5, 'is_visible' => true],
            ['program_id' => 10, 'acronym' => 'BSN', 'title' => 'BS Nursing', 'career' => 'UG', 'college' => 'CN', 'description' => 'BS Nursing', 'degree_id' => 1, 'duration_years' => 4, 'is_visible' => true],
        ];
        
        DB::table('programs')->truncate();
        DB::table('programs')->insert($programs);

        // 3. Curriculum Years (at least 5)
        $curriculums = [
            ['curriculum_id' => 1, 'code' => 'CUR-2020', 'program_id' => 1, 'name' => '2020-2021', 'type' => 'Standard', 'status' => 'Active', 'acad_org' => 'CS', 'acad_group' => 'UG', 'is_visible' => true],
            ['curriculum_id' => 2, 'code' => 'CUR-2021', 'program_id' => 1, 'name' => '2021-2022', 'type' => 'Standard', 'status' => 'Active', 'acad_org' => 'CS', 'acad_group' => 'UG', 'is_visible' => true],
            ['curriculum_id' => 3, 'code' => 'CUR-2022', 'program_id' => 1, 'name' => '2022-2023', 'type' => 'Standard', 'status' => 'Active', 'acad_org' => 'CS', 'acad_group' => 'UG', 'is_visible' => true],
            ['curriculum_id' => 4, 'code' => 'CUR-2023', 'program_id' => 1, 'name' => '2023-2024', 'type' => 'Standard', 'status' => 'Active', 'acad_org' => 'CS', 'acad_group' => 'UG', 'is_visible' => true],
            ['curriculum_id' => 5, 'code' => 'CUR-2024', 'program_id' => 1, 'name' => '2024-2025', 'type' => 'Standard', 'status' => 'Active', 'acad_org' => 'CS', 'acad_group' => 'UG', 'is_visible' => true],
        ];
        
        DB::table('curriculums')->truncate();
        DB::table('curriculums')->insert($curriculums);

        // 4. Mock Courses for Auto-fill
        $courses = [
            ['course_id' => 1, 'sais_course_id' => 1001, 'title' => 'Introduction to Computing', 'course_code' => 'IT 101', 'units' => '3', 'sem_offered' => '1st Semester', 'career' => 'UG', 'description' => 'Intro to computing', 'is_repeatable' => false, 'is_active' => true, 'campus' => 'UP Cebu', 'is_multiple_enrollment' => false, 'subject' => 'IT', 'course_number' => '101', 'grading' => 'Standard'],
            ['course_id' => 2, 'sais_course_id' => 1002, 'title' => 'Programming Logic and Design', 'course_code' => 'IT 102', 'units' => '3', 'sem_offered' => '2nd Semester', 'career' => 'UG', 'description' => 'Programming logic', 'is_repeatable' => false, 'is_active' => true, 'campus' => 'UP Cebu', 'is_multiple_enrollment' => false, 'subject' => 'IT', 'course_number' => '102', 'grading' => 'Standard'],
            ['course_id' => 3, 'sais_course_id' => 1003, 'title' => 'Data Structures and Algorithms', 'course_code' => 'CS 201', 'units' => '3', 'sem_offered' => '1st Semester', 'career' => 'UG', 'description' => 'DSA', 'is_repeatable' => false, 'is_active' => true, 'campus' => 'UP Cebu', 'is_multiple_enrollment' => false, 'subject' => 'CS', 'course_number' => '201', 'grading' => 'Standard'],
            ['course_id' => 4, 'sais_course_id' => 1004, 'title' => 'Calculus I', 'course_code' => 'MATH 101', 'units' => '5', 'sem_offered' => '1st Semester', 'career' => 'UG', 'description' => 'Calc 1', 'is_repeatable' => false, 'is_active' => true, 'campus' => 'UP Cebu', 'is_multiple_enrollment' => false, 'subject' => 'MATH', 'course_number' => '101', 'grading' => 'Standard'],
        ];

        DB::table('courses')->truncate();
        DB::table('courses')->insert($courses);

    }
}
