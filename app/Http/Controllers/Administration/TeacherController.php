<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function TeacherAddPage()
    {
        $teacher_data = new Teachers;

        $title = "Add Teacher details";
        $url = url('administration/teacher_add');
        $data = compact('teacher_data', 'url', 'title');

        return view('administration.teacher_add')->with($data);
    }

    public function TeacherAdd(Request $request)
    {

        $random_num = null;
        do {
            $random_num = rand(10000, 99999);
        } while (DB::table('students')->where('user_id', $random_num)->exists());


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

        session()->flash('success', 'New Teacher added successfully.');

        // Create Teacher User login
        
        $user = new User;

        $user->user_id = $random_num;
        $user->name = $request['user_name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();


        // Mail to Student for confirmation
        $email = $request['email'];
        $data = [
            'user_id' => $random_num,
            'user_name' => $request['user_name'],
            'technology' => $request['technology'],
            'position' => $request['position'],
            'mobile_number' => $request['mobile_number'],
            'email' => $request['email']
        ];

        Mail::send('administration.teacher_add_confirmation', $data, function ($message) use ($email) {
            $message->to($email)
                ->subject('Join to Best Polytechnic Institute Confirmation');
        });


        return redirect('administration/teacher_all');

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
        return view('administration.teacher_all')->with($data);

    }

    public function TeacherEdit($id)
    {

        $teacher_data = Teachers::find($id);

        if (is_null($teacher_data)) {

            return redirect()->back();

        } else {

            $title = "Update Teacher details";
            $url = url('administration/teacher_update') . "/" . $id;
            $data = compact('teacher_data', 'url', 'title');

            return view('administration.teacher_add')->with($data);

        }

    }

    public function TeacherUpdate($id, Request $request)
    {

        $teacher = Teachers::find($id);

        if (is_null($teacher)) {
            return redirect()->back();
        } else {

            $teacher->w_type = "1";
            $teacher->technology = $request['technology'];
            $teacher->user_name = $request['user_name'];
            $teacher->position = $request['position'];
            $teacher->mobile_number = $request['mobile_number'];
            $teacher->email = $request['email'];
            $teacher->save();

            // Show success notification
            session()->flash('success', 'Teacher data updated successfully.');

            return redirect('administration/teacher_all');

        }
    }



    public function TeacherTrash($id)
    {
        $user = Teachers::find($id);

        if (!is_null($user)) {
            $user->delete();

            session()->flash('success-trash', 'Teacher move to Trash successfully.');
            return redirect()->back();
        }
    }

    public function TeacherTrashPage()
    {

        $teachers = Teachers::onlyTrashed()->get();

        $data = compact('teachers');

        return view('administration.teacher_trash')->with($data);

    }

    public function TeacherDelete($id)
    {
        $user = Teachers::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->forceDelete();

            session()->flash('success-delete', 'Teacher permanently deleted successfully.');
            return redirect()->back();
        }
    }

    public function TeacherRestore($id)
    {
        $user = Teachers::withTrashed()->find($id);

        if (!is_null($user)) {
            $user->restore();

            session()->flash('success', 'Teacher restore successfully.');
           return redirect()->back();
        }
    }









}