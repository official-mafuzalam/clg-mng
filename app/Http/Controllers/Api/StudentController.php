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
            'clg_id' => ['required'],
            'roll_no' => ['required'],
            'reg_no' => ['required'],
            'student_name' => ['required'],
            'student_nid' => ['required'],
            'student_mobile' => ['required'],
            'student_gender' => ['required'],
            'father_name' => ['required'],
            'father_nid' => ['required'],
            'father_mobile' => ['required'],
            'mother_name' => ['required'],
            'mother_nid' => ['required'],
            'mother_mobile' => ['required'],
            'address_street' => ['required'],
            'address_postOffice' => ['required'],
            'address_upazila' => ['required'],
            'address_zila' => ['required'],
            'ssc_board' => ['required'],
            'ssc_group' => ['required'],
            'ssc_roll' => ['required'],
            'ssc_reg' => ['required'],
            'ssc_result' => ['required'],
            'password' => ['required'],
            'student_email' => ['required', 'email', 'unique:students'],
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
                'user_id' => $request['user_id'],
                'technology' => $request['technology'],
                'admission_year' => $request['admission_year'],
                'current_semester' => $request['current_semester'],
                'clg_id' => $request['clg_id'],
                'roll_no' => $request['roll_no'],
                'reg_no' => $request['reg_no'],
                'student_name' => $request['student_name'],
                'student_nid' => $request['student_nid'],
                'student_mobile' => $request['student_mobile'],
                'student_email' => $request['student_email'],
                'student_gender' => $request['student_gender'],
                'father_name' => $request['father_name'],
                'father_nid' => $request['father_nid'],
                'father_mobile' => $request['father_mobile'],
                'mother_name' => $request['mother_name'],
                'mother_nid' => $request['mother_nid'],
                'mother_mobile' => $request['mother_mobile'],
                'address_street' => $request['address_street'],
                'address_postOffice' => $request['address_street'],
                'address_upazila' => $request['address_upazila'],
                'address_zila' => $request['address_zila'],
                'ssc_board' => $request['ssc_board'],
                'ssc_group' => $request['ssc_group'],
                'ssc_roll' => $request['ssc_roll'],
                'ssc_reg' => $request['ssc_reg'],
                'ssc_result' => $request['ssc_result'],
                'hsc_board' => $request['hsc_board'],
                'hsc_group' => $request['hsc_group'],
                'hsc_roll' => $request['hsc_roll'],
                'hsc_reg' => $request['hsc_reg'],
                'hsc_result' => $request['hsc_result'],
                'password' => $request['password'],
                'inserter_id' => $request['inserter_id']
            ];


            DB::beginTransaction();

            try {

                $student = Student::create($data);
                DB::commit();

                // Mail to Student for confirmation
                $email = $request['student_email'];

                Mail::send('mail.student_add_confirmation', $data, function ($message) use ($email) {
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




    public function student_add_data(
        Request $request,
        // $user_id,
        // $technology,
        // $admission_year,
        // $current_semester,
        // $clg_id,
        // $roll_no,
        // $student_name,
        // $student_nid,
        // $student_email,
        // $student_mobile,
        // $student_gender,
        // $father_name,
        // $father_nid,
        // $father_mobile,
        // $mother_name,
        // $mother_nid,
        // $mother_mobile,
        // $address_street,
        // $address_postOffice,
        // $address_upazila,
        // $address_zila,
        // $ssc_board,
        // $ssc_group,
        // $ssc_roll,
        // $ssc_reg,
        // $ssc_result,
        // $password,
        // $inserter_id
    ) {


        $data = [
            'user_id' => $request['user_id'],
            'technology' => $request['technology'],
            'admission_year' => $request['admission_year'],
            'current_semester' => $request['current_semester'],
            'clg_id' => $request['clg_id'],
            'roll_no' => $request['roll_no'],
            'student_name' => $request['student_name'],
            'student_nid' => $request['student_nid'],
            'student_mobile' => $request['student_mobile'],
            'student_email' => $request['student_email'],
            'student_gender' => $request['student_gender'],
            'father_name' => $request['father_name'],
            'father_nid' => $request['father_nid'],
            'father_mobile' => $request['father_mobile'],
            'mother_name' => $request['mother_name'],
            'mother_nid' => $request['mother_nid'],
            'mother_mobile' => $request['mother_mobile'],
            'address_street' => $request['address_street'],
            'address_postOffice' => $request['address_street'],
            'address_upazila' => $request['address_upazila'],
            'address_zila' => $request['address_zila'],
            'ssc_board' => $request['ssc_board'],
            'ssc_group' => $request['ssc_group'],
            'ssc_roll' => $request['ssc_roll'],
            'ssc_reg' => $request['ssc_reg'],
            'ssc_result' => $request['ssc_result'],
            'password' => $request['password'],
            'inserter_id' => $request['inserter_id']
        ];

        // return response()->json($data, 200);

        DB::beginTransaction();

        try {

            $student = Student::create($data);
            DB::commit();

            // Mail to Student for confirmation
            $email = $request['student_email'];

            Mail::send('mail.student_add_confirmation', $data, function ($message) use ($email) {
                $message->to($email)
                    ->subject('Admission Confirmation');
            });

        } catch (\Exception $e) {

            p($e->getMessage());
            $student = null;

        }

        if ($student != null) {

            return response()->json([
                'message' => 'Student added successfully',
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
        //     'user_id' => $request['user_id'], 
        //     'technology' => urldecode($technology),
        //     'admission_year' => urldecode($admission_year),
        //     'current_semester' => urldecode($current_semester),
        //     'clg_id' => urldecode($clg_id),
        //     'roll_no' => urldecode($roll_no),
        //     'student_name' => urldecode($student_name),
        //     'student_nid' => urldecode($student_nid),
        //     'student_email' => urldecode($student_email),
        //     'student_mobile' => urldecode($student_mobile),
        //     'student_gender' => urldecode($student_gender),
        //     'father_name' => urldecode($father_name),
        //     'father_nid' => urldecode($father_nid),
        //     'father_mobile' => urldecode($father_mobile),
        //     'mother_name' => urldecode($mother_name),
        //     'mother_nid' => urldecode($mother_nid),
        //     'mother_mobile' => urldecode($mother_mobile),
        //     'address_street' => urldecode($address_street),
        //     'address_postOffice' => urldecode($address_postOffice),
        //     'address_upazila' => urldecode($address_upazila),
        //     'address_zila' => urldecode($address_zila),
        //     'ssc_board' => urldecode($ssc_board),
        //     'ssc_group' => urldecode($ssc_group),
        //     'ssc_roll' => urldecode($ssc_roll),
        //     'ssc_reg' => urldecode($ssc_reg),
        //     'ssc_result' => urldecode($ssc_result),
        //     'password' => urldecode($password),
        //     'inserter_id' => urldecode($inserter_id)
        // ]);


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