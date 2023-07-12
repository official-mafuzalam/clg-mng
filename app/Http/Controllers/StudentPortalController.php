<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Deposits;
use App\Models\Student;



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
}