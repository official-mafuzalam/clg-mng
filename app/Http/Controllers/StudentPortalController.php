<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Deposits;
use App\Models\Student;
use App\Models\Results;
use App\Models\Courses;



class StudentPortalController extends Controller
{
    //




    public function HomePage()
    {

        $user_id = session('user.user_id');

        // $latest_notice = Notice::latest()->first();

        $latest_notice = Notice::where('status', 1)->first();

        $latest_deposit = Deposits::where('user_id', $user_id)
            ->latest()->first();

        $data = compact('latest_notice', 'latest_deposit');

        return view('student_portal.welcome')->with($data);
    }

    public function profile()
    {

        $user_id = session('user.user_id');

        $student_data = Student::where('user_id', $user_id)->first();

        $data = compact('student_data');

        return view('student_portal.profile')->with($data);
    }


    public function notice()
    {

        $notice_data = Notice::where('status', 1)->orderBy('id', 'desc')->get();

        $data = compact('notice_data');

        return view('student_portal.notice')->with($data);
    }

    public function noticeFull($id)
    {

        $notice_data = Notice::find($id);

        $data = compact('notice_data');

        return view('student_portal.notice_full')->with($data);
    }


    public function result(Request $request)
    {

        $user_id = session('user.user_id');

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

        if ($search_technology != "") {

            $result_data = Results::where('technology', $search_technology)
                ->where('semester', $search_semester)
                ->where('user_id', $user_id)
                ->orderBy('id', 'desc')
                ->get();

        } else {

            $result_data = Results::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        }
        $data = compact('result_data');

        return view('student_portal.result')->with($data);
    }


    public function fees_deposit(Request $request)
    {
        $user_id = session('user.user_id');

        $search_date_1 = isset($request['date_1']) ? $request['date_1'] : "";
        $search_date_2 = isset($request['date_2']) ? $request['date_2'] : "";

        if ($search_date_1 != "" && $search_date_2 != "") {
            $deposits = Deposits::whereBetween('date', [$search_date_1, $search_date_2])
                ->where('user_id', $user_id)
                ->orderBy('id', 'desc')
                ->get();
        } else {
            $deposits = Deposits::where('user_id', $user_id)
                ->orderBy('id', 'desc')
                ->get();
        }


        $data = compact('deposits');

        return view('student_portal.fees_deposit')->with($data);
    }

    public function course(Request $request)
    {
        $user_id = session('user.user_id');
        $technology = session('user.technology');
        $current_semester = session('user.current_semester');


        $courses = Courses::where('technology', $technology)
            ->where('semester', $current_semester)
            ->paginate(20);


        $data = compact('courses');
        return view('student_portal.course')->with($data);

    }

















}