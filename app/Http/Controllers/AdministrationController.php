<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Results;
use App\Models\Notice;
use App\Models\Student;
use App\Models\T_features;
use App\Models\Deposits;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministrationController extends Controller
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
        $user_id = session('user.user_id');

        // Retrieve the s_add value from the T_features table

        $s_add = T_features::where('user_id', $user_id)
            ->value('s_add');

        $s_all = T_features::where('user_id', $user_id)
            ->value('s_all');

        $s_trash = T_features::where('user_id', $user_id)
            ->value('s_trash');

        $s_u_sem = T_features::where('user_id', $user_id)
            ->value('s_u_sem');

        $t_add = T_features::where('user_id', $user_id)
            ->value('t_add');

        $t_all = T_features::where('user_id', $user_id)
            ->value('t_all');

        $t_trash = T_features::where('user_id', $user_id)
            ->value('t_trash');

        $n_add = T_features::where('user_id', $user_id)
            ->value('n_add');

        $n_all = T_features::where('user_id', $user_id)
            ->value('n_all');

        $n_archived = T_features::where('user_id', $user_id)
            ->value('n_archived');

        $r_publish = T_features::where('user_id', $user_id)
            ->value('r_publish');

        $r_check = T_features::where('user_id', $user_id)
            ->value('r_check');

        $f_deposit = T_features::where('user_id', $user_id)
            ->value('f_deposit');

        $f_quarry = T_features::where('user_id', $user_id)
            ->value('f_quarry');

        $c_add = T_features::where('user_id', $user_id)
            ->value('c_add');

        $c_all = T_features::where('user_id', $user_id)
            ->value('c_all');



        $totalStudents = Student::count();
        $totalTeachers = Teachers::count();
        $notice = Notice::where('status', 1)->get();
        $totalNotice = count($notice);
        $totalAmount = Deposits::sum('deposit_amount');
        $totalOwnAmount = Deposits::where('inserter_id', '1000001')->sum('deposit_amount');

        $data = compact(
            'totalStudents',
            'totalTeachers',
            'totalNotice',
            'totalAmount',
            'totalOwnAmount',
            'user_id',
            's_add',
            's_all',
            's_trash',
            's_u_sem',
            't_add',
            't_all',
            't_trash',
            'n_add',
            'n_all',
            'n_archived',
            'r_publish',
            'r_check',
            'f_deposit',
            'f_quarry',
            'c_add',
            'c_all'
        );

        return view('administration/welcome')->with($data);

    }

    public function StudentAddPage()
    {
        $sessionData = session()->all();
        $userType = $sessionData['user']['type'];



        $student_data = new Student;

        $title = "Add Student details";
        $url = url('administration/student_add');
        $data = compact('student_data', 'url', 'title', 'userType');

        return view('administration.student_add')->with($data);



    }

}