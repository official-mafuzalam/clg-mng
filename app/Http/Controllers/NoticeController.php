<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    //
    public function NoticeAddPage()
    {


        $notice_data = new Notice;

        $title = "Add New Notice";
        $url = url('administration/notice_add');
        $data = compact('notice_data', 'url', 'title');

        return view('administration/notice_add')->with($data);

    }

    public function NoticeAdd(Request $request)
    {


        $notice = new Notice;

        $notice->category = $request['category'];
        $notice->title = $request['title'];
        $notice->description = $request['description'];
        $notice->save();

        return redirect('administration/notice_all');

    }

    public function NoticeAll()
    {

        $notices = Notice::where('status', 1)->get();

        $data = compact('notices');
        return view('administration/notice_all')->with($data);

    }

    public function NoticeEdit($id)
    {

        $notice_data = Notice::find($id);

        if (is_null($notice_data)) {

            return redirect('administration/notice_all');

        } else {

            $title = "Update Notice Data";
            $url = url('administration/notice_update') . "/" . $id;
            $data = compact('notice_data', 'url', 'title');

            return view('administration/notice_add')->with($data);

        }

    }

    public function NoticeUpdate($id, Request $request)
    {
        $notice = Notice::find($id);

        if (is_null($notice)) {
            return redirect('administration/notice_all');
        } else {

            $notice->category = $request['category'];
            $notice->title = $request['title'];
            $notice->description = $request['description'];
            $notice->save();

            return redirect('administration/notice_all');
        }
    }

    public function NoticeArchivePage()
    {

        $notices = Notice::where('status', 0)->get();

        $data = compact('notices');
        return view('administration/notice_archive')->with($data);

    }

    public function NoticeArchive($id)
    {

        $notice = Notice::find($id);

        if (is_null($notice)) {
            return redirect('administration/notice_all');
        } else {

            $notice->status = 0;
            $notice->save();

            return redirect('administration/notice_all');
        }

    }

    public function NoticeRecycle($id)
    {

        $notice = Notice::find($id);

        if (is_null($notice)) {
            return redirect('administration/notice_archive');
        } else {

            $notice->status = 1;
            $notice->save();

            return redirect('administration/notice_archive');
        }

    }

    public function NoticeDelete($id)
    {

        $notice = Notice::find($id);

        if (is_null($notice)) {
            return redirect('administration/notice_archive');
        } else {


            $notice->delete();

            return redirect('administration/notice_archive');
        }

    }







}