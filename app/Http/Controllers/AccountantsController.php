<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Results;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Deposits;
use Illuminate\View\View;

class AccountantsController extends Controller
{
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function HomePage(): View
    {

        $totalStudents = Student::count();
        $totalTeachers = Teachers::count();
        $notice = Notice::where('status', 1)->get();
        $totalNotice = count($notice);
        $totalAmount = Deposits::sum('deposit_amount');
        $totalOwnAmount = Deposits::where('inserter_id', '1000001')->sum('deposit_amount');

        $data = compact('totalStudents', 'totalTeachers', 'totalNotice', 'totalAmount', 'totalOwnAmount');

        return view('accountants/welcome')->with($data);

    }
}