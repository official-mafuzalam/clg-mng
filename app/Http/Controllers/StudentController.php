<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentAddPage()
    {
        return view('administration/student_add');
    }

    public function StudentAdd(Request $request)
    {

        $random_num = rand(10000, 99999);

        $student = new Student;

        $student->user_id = $random_num;
        $student->technology = $request['technology'];
        $student->admission_year = $request['admission_year'];
        $student->current_semester = $request['current_semester'];
        $student->user_name = $request['user_name'];
        $student->gender = $request['gender'];
        $student->clg_id = $request['clg_id'];
        $student->roll_no = $request['roll_no'];
        $student->mobile_number = $request['mobile_number'];
        $student->email = $request['email'];
        $student->inserter_id = "100001";
        $student->save();

        return redirect('administration/student_all');
    }

    public function StudentAllPage()
    {
        return view('administration/student_all');

    }
}