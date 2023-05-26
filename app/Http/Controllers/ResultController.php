<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Results;
use App\Models\Student;

class ResultController extends Controller
{
    //
    public function ResultPublishPage(Request $request)
    {
        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

        if ($search_technology != "") {

            $courses = Courses::where('technology', $search_technology)
                ->where('semester', $search_semester)
                ->paginate(20);

        } else {
            $courses = Courses::paginate(20);
        }

        $data = [
            'courses' => $courses,
            'search_technology' => $search_technology,
            'search_semester' => $search_semester,
        ];

        return view('administration/result_publish')->with($data);

    }

    public function ResultPublish(Request $request)
    {
        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";
        $search_subject = isset($request['subject']) ? $request['subject'] : "";

        if ($search_technology != "") {

            $students = Student::where('technology', $search_technology)
                ->where('current_semester', $search_semester)
                ->get();

        } else {
            $students = Student::all();
        }

        $data = [
            'students' => $students,
            'search_technology' => $search_technology,
            'search_semester' => $search_semester,
            'search_subject' => $search_subject,
        ];

        return view('administration/result_publish')->with($data);

    }

    public function ResultProcess(){
        
    }
}