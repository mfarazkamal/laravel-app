<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    function studentList()
    {
        return Student::all();
    }

    function addStudent(Request $request)
    {
        $rules = array(
            'name' => 'required | min:2 | max:10',
            'email'=> 'email | required',
            'phone'=> 'required | min:10 | max:10'
        );

        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            if ($student->save()) {
                return "Added";
            } else {
                return "Failed";
            }
        }
    }

    function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            return "Added";
        } else {
            return "Failed";
        }
    }

    function deleteStudent(Request $request)
    {
        $student = Student::find($request->id);
        if ($student->id != null) {
            $student->delete();
            return "Deleted";
        } else {
            return "Failed";
        }
    }
}
