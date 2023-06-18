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

        $user = session('user');
        $inserter_id = $user['user_id'];

        $random_num = null;
        do {
            $random_num = rand(100000, 999999);
        } while (DB::table('teachers')->where('user_id', $random_num)->exists());


        $teacher = new Teachers;

        $teacher->user_id = $random_num;
        $teacher->w_type = "1";
        $teacher->teacher_name = $request['teacher_name'];
        $teacher->teacher_nid = $request['teacher_nid'];
        $teacher->teacher_email = $request['teacher_email'];
        $teacher->teacher_mobile = $request['teacher_mobile'];
        $teacher->teacher_gender = $request['teacher_gender'];
        $teacher->technology = $request['technology'];
        $teacher->address_street = $request['address_street'];
        $teacher->address_postOffice = $request['address_postOffice'];
        $teacher->address_upazila = $request['address_upazila'];
        $teacher->address_zila = $request['address_zila'];
        $teacher->designation = $request['designation'];
        $teacher->password = $request['password'];
        $teacher->inserter_id = $inserter_id;
        $teacher->save();

        session()->flash('success', 'New Teacher added successfully.');

        // Create Teacher User login

        $user = new User;

        $user->user_id = $random_num;
        $user->name = $request['teacher_name'];
        $user->email = $request['teacher_email'];
        $user->password = Hash::make($request['password']);
        $user->save();


        // Mail to Student for confirmation
        $email = $request['teacher_email'];
        $data = [
            'user_id' => $random_num,
            'user_name' => $request['teacher_name'],
            'technology' => $request['technology'],
            'position' => $request['designation'],
            'mobile_number' => $request['teacher_mobile'],
            'email' => $request['teacher_email'],
            'password' => $request['password']
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
            $teacher->teacher_name = $request['teacher_name'];
            $teacher->teacher_nid = $request['teacher_nid'];
            $teacher->teacher_email = $request['teacher_email'];
            $teacher->teacher_mobile = $request['teacher_mobile'];
            $teacher->teacher_gender = $request['teacher_gender'];
            $teacher->technology = $request['technology'];
            $teacher->address_street = $request['address_street'];
            $teacher->address_postOffice = $request['address_postOffice'];
            $teacher->address_upazila = $request['address_upazila'];
            $teacher->address_zila = $request['address_zila'];
            $teacher->designation = $request['designation'];
            $teacher->password = $request['password'];
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