<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\publication;
use App\Models\album;
use App\Models\academic_years;
use App\Models\student;

class IndexController extends Controller
{
    public function index()
    {   
        $pubs = new publication();
        $pubs = $pubs->pub_of_index();

        $albums = new album();
        $albums = $albums->album_of_index();
        
        $years = new academic_years();
        $years = $years->years_of_index();

        $students = new student();
        $students = $students->student_of_index();
        //dd($students[1]);
        return view ('frontend/index',['publications'=>$pubs,'albums'=>$albums,'years'=>$years,'students'=>$students]);
    }
}
