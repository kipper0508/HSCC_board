<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;
use App\Models\academic_years;

class MemberController extends Controller
{
    public function index()
    {   
        $years = new academic_years();
        $years = $years->years_of_index();

        $students = new student();
        $students = $students->student_of_index();
        
        return view ('frontend/member',['years'=>$years,'students'=>$students]);
    }
}
