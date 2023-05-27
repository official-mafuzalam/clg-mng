<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentAddPage()
    {
        $student_data = new Student;

        $title = "Add Student details";
        $url = url('administration/student_add');
        $data = compact('student_data', 'url', 'title');

        return view('administration/student_add')->with($data);
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

        // Show success notification
        session()->flash('success', 'New Student add successfully.');

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
        return view('administration/student_all')->with($data);

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

            return view('administration/student_add')->with($data);

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
            $student->user_name = $request['user_name'];
            $student->gender = $request['gender'];
            $student->clg_id = $request['clg_id'];
            $student->roll_no = $request['roll_no'];
            $student->mobile_number = $request['mobile_number'];
            $student->email = $request['email'];
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
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

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

        return view('administration/semester_update')->with($data);



    }

    public function SemesterUpdate(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";
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
        return view('administration/semester_update')->with($data);


    }

    public function StudentTrash($id)
    {
        $user = Student::find($id);

        if (!is_null($user)) {
            $user->delete();

            // Show success notification
            session()->flash('success-trash', 'Student move to Trash successfully.');
            return redirect('administration/student_all');
        }
    }

    public function StudentTrashPage()
    {

        $students = Student::onlyTrashed()->get();

        $data = compact('students');

        return view('administration/student_trash')->with($data);

    }

    public function StudentDelete($id)
    {
        $user = Student::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->forceDelete();

            // Show success notification
            session()->flash('success-delete', 'Student permanently deleted successfully.');
            return redirect('administration/student_trash');
        }
    }

    public function StudentRestore($id)
    {
        $user = Student::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->restore();

            // Show success notification
            session()->flash('success', 'Student restore successfully.');
            return redirect('administration/student_trash');
        }
    }

}