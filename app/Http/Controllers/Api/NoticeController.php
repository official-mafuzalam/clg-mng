<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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



    // Use this code for post method
    public function notice_add(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'category' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'inserter_id' => ['required']

        ]);

        if ($validator->fails()) {

            return response()->json($validator->messages(), 400);

        } else {

            $data = [

                'category' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
                'inserter_id' => $request->inserter_id

            ];

            DB::beginTransaction();

            try {

                $notice = Notice::create($data);
                DB::commit();

            } catch (\Exception $e) {

                p($e->getMessage());
                $notice = null;

            }

            if ($notice != null) {

                return response()->json([
                    'message' => 'Notice added successfully'
                ], 200);

            } else {

                return response()->json([
                    'message' => 'Internal server error'
                ], 500);

            }

        }


    }


    // Use this code for get method
    public function notice_add_data(Request $request, $category, $title, $description, $inserter_id)
    {

        $data = [

            'category' => $category,
            'title' => $title,
            'description' => $description,
            'inserter_id' => $inserter_id

        ];

        DB::beginTransaction();

        try {

            $notice = Notice::create($data);
            DB::commit();

        } catch (\Exception $e) {

            p($e->getMessage());
            $notice = null;

        }

        if ($notice != null) {

            return response()->json([
                'message' => 'Notice added successfully',
                'status' => 1
            ], 200);

        } else {

            return response()->json([
                'message' => 'Internal server error',
                'status' => 0
            ], 500);

        }


        // Use this code if its not worked
        // return response()->json([
        //     'category' => urldecode($category),
        //     'title' => urldecode($title),
        //     'description' => urldecode($description),
        //     'inserter_id' => urldecode($inserter_id),
        // ]);

    }



























    public function postData(Request $request, $name)
    {
        // Retrieve header data
        $headerData = $request->header();

        // Access specific header values
        $authorization = $request->header('Authorization');
        $contentType = $request->header('Content-Type');

        // Process the received data
        // ...

        // Return a response with the name
        return response()->json(['name' => urldecode($name)]);
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