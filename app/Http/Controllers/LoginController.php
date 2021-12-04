<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use App\Models\user;


class LoginController extends Controller
{
    public function index()
    {   
        return view ('backend/login');
    }

    public function login(Request $request)
    {   
        $username=$request->name;
        $password=$request->password;

        $user = user::where('name', '=', $username)->first();
        if(Hash::check($password, $user->password)){
            Session::put('key','You are cute');
            return redirect()->route('manager');
        }
        else{
            return redirect()->route('login');
        }
    }

    protected function logout(){
        Session::flush();
        return redirect()->route('login');
    } 
}
