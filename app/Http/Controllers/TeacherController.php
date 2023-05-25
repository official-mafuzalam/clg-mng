<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function TeacherAddPage()
    {
        $teacher_data = new Teachers;

        $title = "Add Teacher details";
        $url = url('administration/teacher_add');
        $data = compact('teacher_data', 'url', 'title');

        return view('administration/teacher_add')->with($data);
    }

    public function TeacherAdd(Request $request)
    {

        $random_num = rand(100000, 999999);

        $teacher = new Teachers;

        $teacher->user_id = $random_num;
        $teacher->w_type = "1";
        $teacher->technology = $request['technology'];
        $teacher->user_name = $request['user_name'];
        $teacher->position = $request['position'];
        $teacher->mobile_number = $request['mobile_number'];
        $teacher->email = $request['email'];
        $teacher->inserter_id = "100001";
        $teacher->save();

        return redirect('administration/student_all');

    }

    public function TeacherALL(Request $request)
    {
        $search_technology = isset($request['technology']) ? $request['technology'] : "";

        if ($search_technology != "") {

            $teachers = Teachers::where('technology', $search_technology)
                ->paginate(20);

        } else {
            $teachers = Teachers::paginate(20);
        }

        $data = compact('teachers');
        return view('administration/teacher_all')->with($data);

    }

    public function TeacherEdit($id)
    {

        $teacher_data = Teachers::find($id);

        if (is_null($teacher_data)) {

            return redirect('administration/teacher_all');

        } else {

            $title = "Update Teacher details";
            $url = url('administration/teacher_update') . "/" . $id;
            $data = compact('teacher_data', 'url', 'title');

            return view('administration/teacher_add')->with($data);

        }

    }

    public function TeacherUpdate($id, Request $request)
    {

        $teacher = Teachers::find($id);

        if (is_null($teacher)) {
            return redirect('administration/teacher_all');
        } else {

            $teacher->w_type = "1";
            $teacher->technology = $request['technology'];
            $teacher->user_name = $request['user_name'];
            $teacher->position = $request['position'];
            $teacher->mobile_number = $request['mobile_number'];
            $teacher->email = $request['email'];
            $teacher->save();

            return redirect('administration/teacher_all');

        }
    }



    public function TeacherTrash($id)
    {
        $user = Teachers::find($id);

        if (!is_null($user)) {
            $user->delete();
            return redirect('administration/teacher_all');
        }
    }

    public function TeacherTrashPage()
    {

        $teachers = Teachers::onlyTrashed()->get();

        $data = compact('teachers');

        return view('administration/teacher_trash')->with($data);

    }

    public function TeacherDelete($id)
    {
        $user = Teachers::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->forceDelete();
            return redirect('administration/teacher_trash');
        }
    }

    public function TeacherRestore($id)
    {
        $user = Teachers::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->restore();
            return redirect('administration/teacher_trash');
        }
    }









}