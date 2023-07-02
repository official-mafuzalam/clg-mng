<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Results;

class ResultController extends Controller
{

    public function result_user_id($user_id)
    {

        $result = Results::where('user_id', $user_id)->orderByDesc('created_at')->get();

        if ($result->isEmpty()) {

            $response = [
                'message' => 'Result not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($result) . ' Results found',
                'status' => 1,
                'num_of_data' => count($result),
                'data' => $result
            ];

        }
        ;

        return response()->json($response, 200);
    }


    public function result_tech_sem_sub($technology, $semester, $subject)
    {
        $results = Results::where('technology', $technology)
            ->where('semester', $semester)
            ->where('subject', $subject)
            ->get();

        if ($results->isEmpty()) {

            $response = [
                'message' => 'Results not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($results) . ' Results found for ' . $subject . ' in ' . $technology . ' technology ' . $semester . ' semester',
                'status' => 1,
                'num_of_data' => count($results),
                'data' => $results
            ];

        }
        ;

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