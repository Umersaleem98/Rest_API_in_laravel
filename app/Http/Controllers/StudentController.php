<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        if($students->count()>0)
        {
            return  response()->json([
                'status' => 200,
                'Student' => $students
            ], 200);
        }
        else
        {
            return  response()->json([
                'status'=> 404,
                'Student' => 'No data found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $student = new Student;

        $student->name=$request->name;
        $student->course=$request->course;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();


        return response()->json([
            'status' => 500,
        ], 200);

        
    }
}