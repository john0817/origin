<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //添加学生
    public function add()
    {
        return view('student.add');
    }

    public function save(Request $request)
    {
        //var_dump($_POST);exit;
        Student::create([
            'name'=>$request->name,
            'age'=>$request->age
        ]);
        return redirect('/student/index');
    }
    
    //学生列表
    public function index()
    {
        //获取所有学生信息
        $students = Student::all();
        //调用视图显示
        return view('student.index',['students'=>$students]);
    }
}
