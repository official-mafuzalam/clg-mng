<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;

use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function CourseAddPage()
    {

        $course_data = new Courses;

        $title = "Add New Course";
        $url = url('administration/course_add');
        $data = compact('course_data', 'url', 'title');

        return view('administration.course_add')->with($data);

    }

    public function CourseAdd(Request $request)
    {

        $course = new Courses;

        $course->semester = $request['semester'];
        $course->technology = $request['technology'];
        $course->book_name = $request['book_name'];
        $course->save();

        // Show success notification
        session()->flash('success', 'Course added successfully.');
        return redirect('administration/course_all');


    }

    public function CourseAllPage(Request $request)
    {

        $search_technology = isset($request['technology']) ? $request['technology'] : "";
        $search_semester = isset($request['semester']) ? $request['semester'] : "";

        if ($search_technology != "") {

            $courses = Courses::where('technology', $search_technology)
                ->where('semester', $search_semester)
                ->paginate(20);

        } else {
            $courses = Courses::paginate(20);
        }

        $data = compact('courses');
        return view('administration.course_all')->with($data);

    }

    public function CourseEdit($id)
    {

        $course_data = Courses::find($id);

        if (is_null($course_data)) {

            return redirect('administration/course_all');

        } else {

            $title = "Update Course Data";
            $url = url('administration/course_update') . "/" . $id;
            $data = compact('course_data', 'url', 'title');

            return view('administration.course_add')->with($data);

        }

    }

    public function CourseUpdate($id, Request $request)
    {
        $course = Courses::find($id);

        if (is_null($course)) {
            return redirect('administration/course_all');
        } else {

            $course->semester = $request['semester'];
            $course->technology = $request['technology'];
            $course->book_name = $request['book_name'];
            $course->save();

            // Show success notification
            session()->flash('success', 'Course data updated successfully.');

            return redirect('administration/course_all');
        }
    }

    public function CourseDelete($id)
    {
        $course = Courses::find($id);

        if (is_null($course)) {
            return redirect('administration/course_all');
        } else {

            $course->delete();

            session()->flash('success-delete', 'Course data delete successfully.');
            return redirect('administration/course_all');
        }
    }






}