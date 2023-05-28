<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{

    public function course_tech_sem($technology, $semester)
    {
        $course = Courses::where('technology', $technology)
            ->where('semester', $semester)
            ->get();

        if ($course->isEmpty()) {

            $response = [
                'message' => 'Course not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($course) . ' Courses found',
                'status' => 1,
                'num_of_data' => count($course),
                'data' => $course
            ];

        };

        return response()->json($response, 200);

    }































    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}