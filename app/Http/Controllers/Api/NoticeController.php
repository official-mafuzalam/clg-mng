<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{


    public function notices($status)
    {

        if ($status == 1) {

            $notice = Notice::where('status', 1)->get();

            if ($notice->isEmpty()) {

                $response = [
                    'message' => 'Notice not found',
                    'status' => '404 Not Found'
                ];

            } else {

                $response = [
                    'message' => count($notice) . ' Notices found',
                    'status' => 'Active',
                    'num_of_data' => count($notice),
                    'data' => $notice
                ];
            }
            ;
        } elseif ($status == 0) {

            $notice = Notice::where('status', 0)->get();

            if ($notice->isEmpty()) {

                $response = [
                    'message' => 'Notice not found',
                    'status' => '404 Not Found'
                ];

            } else {

                $response = [
                    'message' => count($notice) . ' Notices found',
                    'status' => 'Archive',
                    'num_of_data' => count($notice),
                    'data' => $notice
                ];
            }
            ;

        } else {

            $response = [
                'message' => 'Bad request.',
                'status' => '406 Not Acceptable'
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