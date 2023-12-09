<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Course;

class CourseController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Course::getRecord();
        $data['header_title'] = "Course List";
        return view('admin.course.list', $data);
    }

    public function add()
    {
        $data['header_title'] = " Add Course";
        return view('admin.course.add', $data);
    }
    public function insert(Request $request)
    {
        $save = new Course;
        $save->courseCode =$request->courseCode;
        $save->courseName =$request->courseName;
        $save->Details =$request->Details;
        $save->save();
        
        return redirect('admin/course/list')->with('success', "Course successfully Created");
    }

}
