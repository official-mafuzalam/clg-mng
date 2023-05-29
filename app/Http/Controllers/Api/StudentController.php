<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Deposits;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{

    public function all_students()
    {

        $students = Student::all();

        if ($students->isEmpty()) {

            $response = [
                'message' => 'Students not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($students) . ' Students found',
                'status' => 1,
                'num_of_data' => count($students),
                'data' => $students
            ];
        }
        ;

        return response()->json($response, 200);

    }

    public function student_user_id($user_id)
    {

        $student = Student::where('user_id', $user_id)->get();

        if ($student->isEmpty()) {

            $response = [
                'message' => 'Student not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($student) . ' Students found',
                'status' => 1,
                'num_of_data' => count($student),
                'data' => $student
            ];

        }
        ;

        return response()->json($response, 200);
    }

    public function student_technology($technology)
    {

        $student = Student::where('technology', $technology)->get();

        if (is_null($student)) {

            $response = [
                'message' => 'Student not found',
                'status' => 0
            ];
        } else {

            $response = [
                'message' => count($student) . ' Students found',
                'status' => 1,
                'num_of_data' => count($student),
                'data' => $student
            ];

        }

        return response()->json($response, 200);

    }

    public function student_tech_sem($technology, $semester)
    {
        $student = Student::where('technology', $technology)
            ->where('current_semester', $semester)
            ->get();

        if (is_null($student)) {

            $response = [
                'message' => 'Student not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($student) . ' Students found',
                'status' => 1,
                'num_of_data' => count($student),
                'data' => $student
            ];

        }

        return response()->json($response, 200);

    }

    public function student_add(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'user_id' => ['required', 'unique:students'],
            'technology' => ['required'],
            'admission_year' => ['required'],
            'current_semester' => ['required'],
            'user_name' => ['required'],
            'gender' => ['required'],
            'clg_id' => ['required'],
            'roll_no' => ['required'],
            'mobile_number' => ['required'],
            'email' => ['required', 'email', 'unique:students'],
            'inserter_id' => ['required'],

        ]);

        if ($validator->fails()) {

            return response()->json($validator->messages(), 400);

        } else {

            $random_num = null;
            do {
                $random_num = rand(10000, 99999);
            } while (DB::table('students')->where('user_id', $random_num)->exists());

            $data = [

                'user_id' => $random_num,
                'technology' => $request->technology,
                'admission_year' => $request->admission_year,
                'current_semester' => $request->current_semester,
                'user_name' => $request->user_name,
                'gender' => $request->gender,
                'clg_id' => $request->clg_id,
                'roll_no' => $request->roll_no,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'inserter_id' => $request->inserter_id

            ];

            DB::beginTransaction();

            try {

                $student = Student::create($data);
                DB::commit();

                // Mail to Student for confirmation
                $email = $request['email'];

                Mail::send('administration.student_add_confirmation', $data, function ($message) use ($email) {
                    $message->to($email)
                        ->subject('Admission Confirmation');
                });

            } catch (\Exception $e) {

                p($e->getMessage());
                $student = null;

            }

            if ($student != null) {

                return response()->json([
                    'message' => 'Student added successfully'
                ], 200);

            } else {

                return response()->json([
                    'message' => 'Internal server error'
                ], 500);

            }

        }


    }



















    public function quarry_fees($user_id)
    {

        // $students = Student::all();

        // if (count($students) > 0) {

        //     $response = [
        //         'message' => count($students) . ' Students found',
        //         'status' => 1,
        //         'data' => $students
        //     ];
        // } else {

        //     $response = [
        //         'message' => 'Students not found',
        //         'status' => 0
        //     ];

        // }
        // ;

        // return response()->json($response, 200);


    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();


        if (count($students) > 0) {

            $response = [
                'message' => 'Students found',
                'status' => 1,
                'total_student' => count($students),
                'data' => $students
            ];
        } else {

            $response = [
                'message' => 'Students not found',
                'status' => 0
            ];

        }
        ;

        return response()->json($response, 200);


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

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']

        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        p($request->all());
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