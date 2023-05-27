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
                ->get();

        } else {
            $courses = [];
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

        return view('administration/result_process')->with($data);

    }

    public function ResultSaveMarks(Request $request)
    {
        $studentId = $request->input('studentId');
        $marks = $request->input('marks');
        $subject = $request->input('subject');
        $userId = $request->input('userId');
        $userName = $request->input('userName');
        $technology = $request->input('technology');
        $current_semester = $request->input('current_semester');
        $rollNo = $request->input('rollNo');

        $result = new Results();
        $result->user_id = $userId;
        $result->roll_no = $rollNo;
        $result->user_name = $userName;
        $result->semester = $current_semester; // Assuming you have the semester value available
        $result->technology = $technology;
        $result->subject = $subject;
        $result->marks = $marks;
        $result->save();

        return response()->json(['success' => true, 'message' => 'Marks saved successfully']);

    }

    public function ResultCheckPage(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

        if ($search_technology != "") {

            $courses = Courses::where('technology', $search_technology)
                ->where('semester', $search_semester)
                ->get();

        } else {
            $courses = [];
        }

        $data = [
            'courses' => $courses,
            'search_technology' => $search_technology,
            'search_semester' => $search_semester,
        ];

        return view('administration/result_check')->with($data);

    }

    public function ResultCheck(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";
        $search_subject = isset($request['subject']) ? $request['subject'] : "";

        if ($search_technology != "") {

            $results = Results::where('technology', $search_technology)
                ->where('semester', $search_semester)
                ->where('subject', $search_subject)
                ->get();

        } else {
            $results = Results::all();
        }

        $data = [
            'results' => $results,
            'search_technology' => $search_technology,
            'search_semester' => $search_semester,
            'search_subject' => $search_subject,
        ];

        return view('administration/result_checked')->with($data);

    }

    public function ResultEdit($id)
    {

        $result_data = Results::find($id);

        if (is_null($result_data)) {

            return redirect()->back();

        } else {

            $title = "Update Student Result Data";
            $url = url('administration/result_update') . "/" . $id;
            $data = compact('result_data', 'url', 'title');

            return view('administration/result_update')->with($data);

        }

    }

    public function ResultUpdate($id, Request $request)
    {
        $result_data = Results::find($id);

        if (is_null($result_data)) {
            return redirect()->back();
        } else {
            $result_data->marks = $request['marks'];
            $result_data->save();

            // Show success notification
            session()->flash('success', 'Result updated successfully.');

            return redirect()->route('result.checkPage');
        }
    }




}