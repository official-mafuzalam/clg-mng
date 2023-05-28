<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;

class TeacherController extends Controller
{

    public function all_teachers()
    {
        $teachers = Teachers::all();

        if (count($teachers) > 0) {

            $response = [
                'message' => count($teachers) . ' Teachers found',
                'status' => 1,
                'num_of_data' => count($teachers),
                'data' => $teachers
            ];

        } else {

            $response = [
                'message' => 'Teachers not found',
                'status' => 0
            ];

        }
        ;

        return response()->json($response, 200);

    }

    public function teacher_user_id($user_id)
    {
        $teacher = Teachers::where('user_id', $user_id)->get();

        if ($teacher->isEmpty()) {

            $response = [
                'message' => 'Teacher not found',
                'status' => 0
            ];
        } else {

            $response = [
                'message' => count($teacher) . ' Teachers found',
                'status' => 1,
                'num_of_data' => count($teacher),
                'data' => $teacher
            ];

        }

        return response()->json($response, 200);

    }

    public function teacher_technology($technology)
    {
        $teachers = Teachers::where('technology', $technology)->get();

        if ($teachers->isEmpty()) {
            $response = [
                'message' => '0 Teachers found',
                'status' => 0,
                'num_of_data' => 0,
                'data' => []
            ];
        } else {
            $response = [
                'message' => count($teachers) . ' Teachers found',
                'status' => 1,
                'num_of_data' => count($teachers),
                'data' => $teachers
            ];
        }

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