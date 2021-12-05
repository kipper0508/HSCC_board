<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use App\Models\album;
use App\Models\academic_years;
use App\Models\student;
use App\Models\publication;

class ManagerController extends Controller
{
    public function index()
    {   
        if(Session::has('key')){
            return view('backend/manager');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function albumdir()
    {   
        if(Session::has('key')){
            $albums = new album();
            $albums = $albums->album_all();
            
            return view('backend/album_dir',['albums'=>$albums]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function albumupload()
    {   
        if(Session::has('key')){
            $text = "";
            return view('backend/album_upload',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function albumupload_db(Request $request)
    {   
        if(Session::has('key')){
            $imageName = time().'.'.$request->photo->extension();

            $albums = new album();
            $albums->visible = 1;
            $albums->comment = $request->comment;
            $imagePath = "img/album/".$imageName;
            $albums->path = $imagePath;
            $albums->save();

            $request->photo->move(public_path('img/album'), $imageName);
            
            $text = "Success";
            return view('backend/album_upload',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function albumupdate(Request $request)
    {   
        if(Session::has('key')){
            $albums = album::where('id', '=', $request->id)->first();
            return view('backend/album_update',['album'=>$albums]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function albumupdate_db(Request $request)
    {   
        if(Session::has('key')){
        
            if($request->photo){
                $imageName = time().'.'.$request->photo->extension();
                $imagePath = "img/album/".$imageName;
                $request->photo->move(public_path('img/album'), $imageName);

                $albums = album::where('id', '=', $request->id)->first();
                if($albums){
                    if(File::exists(public_path($albums->path))){
                        File::delete(public_path($albums->path));
                    }
                }
            }

            $albums = album::where('id', '=', $request->id)->first();
            $albums->comment = $request->comment;
            $albums->visible = $request->visible;
            if($request->photo){
                $albums->path = $imagePath;
            }
            $albums->save();

            $albums = new album();
            $albums = $albums->album_all();
            return view('backend/album_dir',['albums'=>$albums]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function albumdelete_db(Request $request)
    {   
        if(Session::has('key')){
            $albums = album::where('id', '=', $request->id)->first();

            if($albums){
                if(File::exists(public_path($albums->path))){
                    File::delete(public_path($albums->path));
                    $albums->delete();
                }
            }

            $albums = new album();
            $albums = $albums->album_all();
            
            return view('backend/album_dir',['albums'=>$albums]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function yeardir()
    {   
        if(Session::has('key')){
            $years = new academic_years();
            $years = $years->years_all();
            
            return view('backend/year_dir',['years'=>$years]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function yearcreate()
    {   
        if(Session::has('key')){
            $text = "";
            return view('backend/year_create',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function yearcreate_db(Request $request)
    {   
        if(Session::has('key')){

            $years = new academic_years();
            $years->visible = 1;
            $years->year = $request->year;
            $years->save();

            $text = "Success";
            return view('backend/year_create',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function yearupdate(Request $request)
    {   
        if(Session::has('key')){
            $years = academic_years::where('id', '=', $request->id)->first();

            return view('backend/year_update',['year'=>$years]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function yearupdate_db(Request $request)
    {   
        if(Session::has('key')){
            $years = academic_years::where('id', '=', $request->id)->first();
            if($years){
                $years->visible = $request->visible;
                $years->save();
            }

            $years = new academic_years();
            $years = $years->years_all();
            
            return view('backend/year_dir',['years'=>$years]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function yeardelete_db(Request $request)
    {   
        if(Session::has('key')){
            $years = academic_years::where('id', '=', $request->id)->first();

            if($years){
                $years->delete();
            }
            else{
            }
            
            $years = new academic_years();
            $years = $years->years_all();
            
            return view('backend/year_dir',['years'=>$years]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function memberdir()
    {   
        if(Session::has('key')){
            $students = new student();
            $students = $students->student_all();
            
            return view('backend/member_dir',['students'=>$students]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function membercreate()
    {   
        if(Session::has('key')){
            $text = "";
            return view('backend/member_create',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function membercreate_db(Request $request)
    {   
        if(Session::has('key')){
            
            if(academic_years::where('year', '=', $request->grade)->count()){
                if($request->photo){
                    $imageName = time().'.'.$request->photo->extension();
                    $imagePath = "img/member/".$imageName;
                    $request->photo->move(public_path('img/member'), $imageName);
                }
                else{
                    $imagePath = "";
                }
                
                $student = new student();
                $student->name = $request->name;
                $student->comment = $request->comment;
                $student->student_grade = $request->grade;
                $student->photo = $imagePath;
                $student->save();

                $text = "Success";
            }
            else{
                $text = "Error";
            }
            return view('backend/member_create',['messeage'=>$text]);
            
        }
        else{
            return redirect()->route('login');
        }
    }

    public function memberupdate(Request $request)
    {   
        if(Session::has('key')){
            $student = student::where('id', '=', $request->id)->first();
            
            return view('backend/member_update',['student'=>$student]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function memberupdate_db(Request $request)
    {   
        if(Session::has('key')){
            $student = student::where('id', '=', $request->id)->first();
            if($student){
                if($request->photo){
                    if(File::exists(public_path($student->photo))){
                        File::delete(public_path($student->photo));
                    }
                    $imageName = time().'.'.$request->photo->extension();
                    $imagePath = "img/member/".$imageName;
                    $request->photo->move(public_path('img/member'), $imageName);
                }
                $student->name = $request->name;
                $student->comment = $request->comment;
                
                if(academic_years::where('year', '=', $request->grade)->count()){
                    $student->student_grade = $request->grade;
                }
                
                $student->facebook = $request->facebook;
                $student->instagram = $request->instagram;
                $student->github = $request->github;

                if($request->photo){
                    $student->photo = $imagePath;
                }
                $student->save();
            }  

            $students = new student();
            $students = $students->student_all();
            return view('backend/member_dir',['students'=>$students]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function memberdelete_db(Request $request)
    {   
        if(Session::has('key')){
            $student = student::where('id', '=', $request->id)->first();
            
            if($student){
                if(File::exists(public_path($student->photo))){
                    File::delete(public_path($student->photo));
                }
                $student->delete();
            }
            
            $students = new student();
            $students = $students->student_all();
            
            return view('backend/member_dir',['students'=>$students]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function publicationdir()
    {   
        if(Session::has('key')){
            $publication = new publication();
            $publication = $publication->pub_of_all();
            
            return view('backend/publication_dir',['publications'=>$publication]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function publicationcreate()
    {   
        if(Session::has('key')){
            $text = "";
            return view('backend/publication_create',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function publicationcreate_db(Request $request)
    {   
        if(Session::has('key')){

            $publication = new publication();
            $publication->visible = 1;
            $publication->content = $request->content;
            $publication->year = $request->year;
            $publication->month = $request->month;
            $publication->save();

            $text = "Success";
            return view('backend/publication_create',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function publicationupdate(Request $request)
    {   
        if(Session::has('key')){
            $publication = publication::where('id', '=', $request->id)->first();

            return view('backend/publication_update',['publication'=>$publication]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function publicationupdate_db(Request $request)
    {   
        $publication = publication::where('id', '=', $request->id)->first();
        if($publication){
            $publication->content = $request->content;
            $publication->year = $request->year;
            $publication->month = $request->month;
            $publication->visible = $request->visible;
            $publication->save();
        }
        $publication = new publication();
        $publication = $publication->pub_of_all();
            
        return view('backend/publication_dir',['publications'=>$publication]);
    }

    public function publicationdelete()
    {   
        if(Session::has('key')){
            $text = "";
            return view('backend/publication_delete',['messeage'=>$text]);
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function publicationdelete_db(Request $request)
    {   
        if(Session::has('key')){
            $publication = publication::where('id', '=', $request->id)->first();

            if($publication){
                $publication->delete();
            }
            $publication = new publication();
            $publication = $publication->pub_of_all();
            
            return view('backend/publication_dir',['publications'=>$publication]);
        }
        else{
            return redirect()->route('login');
        }
        
    }
}
