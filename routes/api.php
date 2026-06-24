<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/curriculum-years', function () {
    return response()->json(DB::table('curriculums')->select('curriculum_id as id', 'name as year', 'name')->get());
});

Route::get('/colleges', function () {
    return response()->json(DB::table('amis_colleges')->select('id', 'college_abbrev as code', 'college_name as name')->get());
});

Route::get('/programs', function () {
    return response()->json(DB::table('programs')->select('program_id as id', 'acronym as code', 'title as name', 'duration_years')->get());
});

Route::get('/courses/{code}', function ($code) {
    $course = DB::table('courses')->where('course_code', strtoupper($code))->first();
    
    if (!$course) {
        return response()->json(['message' => 'Course not found'], 404);
    }
    
    // Mock prerequisite mapping for demo
    $prerequisites = [
        'IT 102' => 'IT 101',
        'CS 201' => 'IT 102',
    ];
    
    return response()->json([
        'title' => $course->title,
        'units' => $course->units,
        'semester' => $course->sem_offered,
        'prerequisite' => $prerequisites[strtoupper($code)] ?? 'None',
    ]);
});
