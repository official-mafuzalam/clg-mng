<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposits;
use App\Models\Student;

class DepositController extends Controller
{
    public function DepositFindPage(Request $request)
    {

        $search_user_id = isset($request['id']) ? $request['id'] : "";


        if (is_null($search_user_id)) {

            $students = [];

        } else {

            $students = Student::where('user_id', $search_user_id)->get();

        }

        if ($search_user_id != "") {

            $deposits = Deposits::where('user_id', $search_user_id)
                ->paginate(20);

        } else {
            $deposits = Deposits::paginate(20);
        }

        $data = compact('deposits', 'students');
        return view('administration/depositor_find')->with($data);

    }

    public function DepositForm($id)
    {

        $student_data = Student::find($id);

        if (is_null($student_data)) {

            return redirect('administration/student_all');

        } else {

            $title = "Update Student details";
            $url = url('administration/student_update') . "/" . $id;
            $data = compact('student_data', 'url', 'title');

            return view('administration/deposit_form')->with($data);

        }

    }


    public function DepositConfirm(Request $request)
    {

        $random_num = rand(10000000, 99999999);

        $deposit = new Deposits;

        $deposit->date = $request['date'];
        $deposit->user_id = $request['user_id'];
        $deposit->technology = $request['technology'];
        $deposit->admission_year = $request['admission_year'];
        $deposit->current_semester = $request['current_semester'];
        $deposit->user_name = $request['user_name'];
        $deposit->clg_id = $request['clg_id'];
        $deposit->roll_no = $request['roll_no'];
        $deposit->mobile_number = $request['mobile_number'];
        $deposit->deposit_category = $request['deposit_category'];
        $deposit->deposit_amount = $request['deposit_amount'];
        $deposit->comment = $request['comment'];
        $deposit->deposit_challan_no = $random_num;
        $deposit->inserter_id = "100000";
        $deposit->save();

        // Show success notification
        session()->flash('success', 'Deposit completed successfully.');

        return redirect()->route('deposit.print', ['id' => $random_num]);



    }

    public function DepositPrint($id)
    {

        $deposit_data = Deposits::where('deposit_challan_no', $id)->get();
        $data = compact('deposit_data');

        return view('administration/deposit_print')->with($data);

    }







}