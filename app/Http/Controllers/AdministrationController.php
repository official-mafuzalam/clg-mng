<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Results;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Deposits;

class AdministrationController extends Controller
{

    public function HomePage()
    {

        $totalStudents = Student::count();
        $totalTeachers = Teachers::count();
        $notice = Notice::where('status', 1)->get();
        $totalNotice = count($notice);
        $totalAmount = Deposits::sum('deposit_amount');
        $totalOwnAmount = Deposits::where('inserter_id', '1000001')->sum('deposit_amount');

        $data = compact('totalStudents', 'totalTeachers', 'totalNotice', 'totalAmount', 'totalOwnAmount');

        return view('administration/welcome')->with($data);

    }

}