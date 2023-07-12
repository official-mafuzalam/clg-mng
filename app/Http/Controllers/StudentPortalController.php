<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Deposits;



class StudentPortalController extends Controller
{
    //




    public function HomePage(){

        $user_id = session('user.user_id');

        // $latest_notice = Notice::latest()->first();

        $latest_notice = Notice::where('status',1)->first();

        $latest_deposit = Deposits::where('user_id', $user_id)
        ->latest()->first();

        $data= compact('latest_notice', 'latest_deposit');

        return view('student_portal.welcome')->with($data);
    }
}
