<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;

class SigninController extends Controller
{
    public function login(){
        $students = Student::paginate(5);

        if(Auth::user()){
            return redirect('welcome', compact('students'));
        }else{
            return view('security.login');
        }
    }

    public function register(){
        return view('security.register');
    }

    public function validateCredentials(Request $request) {
        $username = $request->username;
        $password = $request->password;
    }
}
