<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use App\Models\T_features;
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

        // Create Teacher Features

        $t_features = new T_features;

        $t_features->user_name = $request['teacher_name'];
        $t_features->user_id = $random_num;
        $t_features->save();




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

        Mail::send('mail.teacher_add_confirmation', $data, function ($message) use ($email) {
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


    public function TeacherFeatures(Request $request)
    {


        $search_technology = isset($request['technology']) ? $request['technology'] : "";

        if ($search_technology != "") {

            $teachers = Teachers::where('technology', $search_technology)
                ->paginate(20);

        } else {
            $teachers = Teachers::paginate(20);
        }

        $data = compact('teachers');
        return view('administration.teacher_features')->with($data);


    }

    public function TeacherFeaturesEdit($id)
    {

        $user_id = session('user.user_id');

        // Retrieve the s_add value from the T_features table

        $s_add = T_features::where('id', $id)
            ->value('s_add');

        $s_all = T_features::where('id', $id)
            ->value('s_all');

        $s_trash = T_features::where('id', $id)
            ->value('s_trash');

        $s_u_sem = T_features::where('id', $id)
            ->value('s_u_sem');

        $t_add = T_features::where('id', $id)
            ->value('t_add');

        $t_all = T_features::where('id', $id)
            ->value('t_all');

        $t_trash = T_features::where('id', $id)
            ->value('t_trash');

        $t_features = T_features::where('id', $id)
            ->value('t_features');

        $n_add = T_features::where('id', $id)
            ->value('n_add');

        $n_all = T_features::where('id', $id)
            ->value('n_all');

        $n_archived = T_features::where('id', $id)
            ->value('n_archived');

        $r_publish = T_features::where('id', $id)
            ->value('r_publish');

        $r_check = T_features::where('id', $id)
            ->value('r_check');

        $f_deposit = T_features::where('id', $id)
            ->value('f_deposit');

        $f_quarry = T_features::where('id', $id)
            ->value('f_quarry');

        $c_add = T_features::where('id', $id)
            ->value('c_add');

        $c_all = T_features::where('id', $id)
            ->value('c_all');



        $teacher_data = Teachers::find($id);

        if (is_null($teacher_data)) {

            return redirect()->back();

        } else {

            $title = "Update Teacher Features";
            $url = url('administration/teacher_features_update') . "/" . $id;
            $data = compact(
                'teacher_data',
                'url',
                'title',
                'user_id',
                's_add',
                's_all',
                's_trash',
                's_u_sem',
                't_add',
                't_all',
                't_trash',
                't_features',
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

            return view('administration.teacher_features_edit')->with($data);

        }


    }

    public function TeacherFeaturesUpdate(Request $request, $id)
    {

        // Get the checkbox value from the request
        // $s_add = $request->has('s_add-switch') ? 0 : 1;
        // $s_all = $request->has('s_all-switch') ? 0 : 1;
        // $s_trash = $request->has('s_trash-switch') ? 0 : 1;
        // $s_u_sem = $request->has('s_u_sem-switch') ? 0 : 1;
        // $t_add = $request->has('t_add-switch') ? 0 : 1; // Updated condition
        // $t_all = $request->has('t_all-switch') ? 0 : 1; // Updated condition

        // echo $s_add, " | ", $s_all, " | ", $s_trash, " | ", $s_u_sem, " | ", $t_add, " | ", $t_all;



        // $s_add = $request->input('s_add'); // Retrieving the checkbox value by name

        // if ($s_add == 'on') {
        //     echo '1';
        // } else {
        //     echo '0';
        // }

        $checkboxes = [
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
        ];

        $checkboxValues = [];

        foreach ($checkboxes as $checkbox) {
            $value = $request->has($checkbox) ? 1 : 0;
            $checkboxValues[$checkbox] = $value;
        }

        // Store the checkbox values in the database
        $features = T_features::find($id);
        $features->s_add = $checkboxValues['s_add'];
        $features->s_all = $checkboxValues['s_all'];
        $features->s_trash = $checkboxValues['s_trash'];
        $features->s_u_sem = $checkboxValues['s_u_sem'];
        $features->t_add = $checkboxValues['t_add'];
        $features->t_all = $checkboxValues['t_all'];
        $features->t_trash = $checkboxValues['t_trash'];
        $features->n_add = $checkboxValues['n_add'];
        $features->n_all = $checkboxValues['n_all'];
        $features->n_archived = $checkboxValues['n_archived'];
        $features->r_publish = $checkboxValues['r_publish'];
        $features->r_check = $checkboxValues['r_check'];
        $features->f_deposit = $checkboxValues['f_deposit'];
        $features->f_quarry = $checkboxValues['f_quarry'];
        $features->c_add = $checkboxValues['c_add'];
        $features->c_all = $checkboxValues['c_all'];

        $features->save();


        return redirect('administration/teacher_features');

    }







}