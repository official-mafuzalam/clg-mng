<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{





    public function StudentAddPage()
    {

        $student_data = new Student;

        $title = "Add Student details";
        $url = url('administration/student_add');
        $data = compact('student_data', 'url', 'title');

        return view('administration.student_add')->with($data);

    }

    public function StudentAdd(Request $request)
    {

        $user = session('user');
        $userId = $user['user_id'];


        $random_num = null;
        do {
            $random_num = rand(10000, 99999);
        } while (DB::table('students')->where('user_id', $random_num)->exists());


        $student = new Student;

        $student->user_id = $random_num;
        $student->technology = $request['technology'];
        $student->admission_year = $request['admission_year'];
        $student->current_semester = $request['current_semester'];
        $student->clg_id = $request['clg_id'];
        $student->roll_no = $request['roll_no'];
        $student->reg_no = $request['reg_no'];
        $student->student_name = $request['student_name'];
        $student->student_nid = $request['student_nid'];
        $student->student_email = $request['student_email'];
        $student->student_mobile = $request['student_mobile'];
        $student->father_name = $request['father_name'];
        $student->father_nid = $request['father_nid'];
        $student->father_mobile = $request['father_mobile'];
        $student->mother_name = $request['mother_name'];
        $student->mother_nid = $request['mother_nid'];
        $student->mother_mobile = $request['mother_mobile'];
        $student->student_gender = $request['student_gender'];
        $student->address_street = $request['address_street'];
        $student->address_postOffice = $request['address_postOffice'];
        $student->address_upazila = $request['address_upazila'];
        $student->address_zila = $request['address_zila'];
        $student->ssc_board = $request['ssc_board'];
        $student->ssc_group = $request['ssc_group'];
        $student->ssc_roll = $request['ssc_roll'];
        $student->ssc_reg = $request['ssc_reg'];
        $student->ssc_result = $request['ssc_result'];
        $student->hsc_board = $request['hsc_board'];
        $student->hsc_group = $request['hsc_group'];
        $student->hsc_roll = $request['hsc_roll'];
        $student->hsc_reg = $request['hsc_reg'];
        $student->hsc_result = $request['hsc_result'];
        $student->password = $request['password'];
        $student->inserter_id = $userId;
        $student->save();

        // Show success notification
        session()->flash('success', 'New Student add successfully.');


        // Mail to Student for confirmation
        $email = $request['student_email'];

        $data = [
            'user_id' => $random_num,
            'user_name' => $request['student_name'],
            'technology' => $request['technology'],
            'current_semester' => $request['current_semester'],
            'gender' => $request['student_gender'],
            'clg_id' => $request['clg_id'],
            'roll_no' => $request['roll_no'],
            'mobile_number' => $request['student_mobile'],
            'email' => $request['student_email']
        ];

        Mail::send('mail.student_add_confirmation', $data, function ($message) use ($email) {
            $message->to($email)
                ->subject('Admission Confirmation');
        });


        return redirect('administration/student_all');

    }

    public function StudentALL(Request $request)
    {
        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

        if ($search_technology != "") {

            $students = Student::where('technology', $search_technology)
                ->where('current_semester', $search_semester)
                ->paginate(20);

        } else {
            $students = Student::paginate(20);
        }

        $data = compact('students');
        return view('administration.student_all')->with($data);

    }

    public function StudentEdit($id)
    {

        $student_data = Student::find($id);

        if (is_null($student_data)) {

            return redirect('administration/student_all');

        } else {

            $title = "Update Student details";
            $url = url('administration/student_update') . "/" . $id;
            $data = compact('student_data', 'url', 'title');

            return view('administration.student_add')->with($data);

        }

    }

    public function StudentUpdate($id, Request $request)
    {

        $student = Student::find($id);

        if (is_null($student)) {
            return redirect('administration/student_all');
        } else {

            $student->technology = $request['technology'];
            $student->admission_year = $request['admission_year'];
            $student->current_semester = $request['current_semester'];
            $student->clg_id = $request['clg_id'];
            $student->roll_no = $request['roll_no'];
            $student->reg_no = $request['reg_no'];
            $student->student_name = $request['student_name'];
            $student->student_nid = $request['student_nid'];
            $student->student_email = $request['student_email'];
            $student->student_mobile = $request['student_mobile'];
            $student->father_name = $request['father_name'];
            $student->father_nid = $request['father_nid'];
            $student->father_mobile = $request['father_mobile'];
            $student->mother_name = $request['mother_name'];
            $student->mother_nid = $request['mother_nid'];
            $student->mother_mobile = $request['mother_mobile'];
            $student->student_gender = $request['student_gender'];
            $student->address_street = $request['address_street'];
            $student->address_postOffice = $request['address_postOffice'];
            $student->address_upazila = $request['address_upazila'];
            $student->address_zila = $request['address_zila'];
            $student->ssc_board = $request['ssc_board'];
            $student->ssc_group = $request['ssc_group'];
            $student->ssc_roll = $request['ssc_roll'];
            $student->ssc_reg = $request['ssc_reg'];
            $student->ssc_result = $request['ssc_result'];
            $student->hsc_board = $request['hsc_board'];
            $student->hsc_group = $request['hsc_group'];
            $student->hsc_roll = $request['hsc_roll'];
            $student->hsc_reg = $request['hsc_reg'];
            $student->hsc_result = $request['hsc_result'];
            $student->password = $request['password'];
            $student->inserter_id = "100001";
            $student->save();

            // Show success notification
            session()->flash('success', 'Student data updated successfully.');

            return redirect('administration/student_all');

        }
    }


    public function SemesterUpdateSearch(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['current_semester']) ? $request['current_semester'] : "";

        if ($search_technology != "") {

            $students = Student::where('technology', $search_technology)
                ->where('current_semester', $search_semester)
                ->paginate(20);

        } else {
            $students = [];
        }

        $data = [
            'students' => $students,
            'search_technology' => $search_technology,
            'search_semester' => $search_semester,
        ];

        return view('administration.semester_update')->with($data);



    }

    public function SemesterUpdate(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['current_semester']) ? $request['current_semester'] : "";
        $new_semester = isset($request['new_semester']) ? $request['new_semester'] : "";

        if ($search_technology != "") {

            Student::where('technology', $search_technology)
                ->where('current_semester', $search_semester)
                ->update(['current_semester' => $new_semester]);

            $students = Student::where('technology', $search_technology)
                ->where('current_semester', $new_semester)
                ->get();

        } else {
            $students = Student::all();
        }
        $data = compact('students');
        // Show success notification
        session()->flash('success', 'Semester updated successfully.');
        return view('administration.semester_update')->with($data);


    }

    public function StudentTrash($id)
    {
        $user = Student::find($id);

        if (!is_null($user)) {
            $user->delete();

            // Show success notification
            session()->flash('success-trash', 'Student move to Trash successfully.');
            return redirect()->back();
        }
    }

    public function StudentTrashPage()
    {

        $students = Student::onlyTrashed()->get();

        $data = compact('students');

        return view('administration.student_trash')->with($data);

    }

    public function StudentDelete($id)
    {
        $user = Student::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->forceDelete();

            // Show success notification
            session()->flash('success-delete', 'Student permanently deleted successfully.');
            return redirect()->back();
        }
    }

    public function StudentRestore($id)
    {
        $user = Student::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->restore();

            // Show success notification
            session()->flash('success', 'Student restore successfully.');
            return redirect()->back();
        }
    }

}