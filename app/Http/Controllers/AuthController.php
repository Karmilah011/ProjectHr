<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
     public function login()
     {
        return view('auths.login');
     }
     public function postlogin(Request $request)
     {
      // $messages = [
      //    'password.regex' => ':attribute must contain lowercase, uppercase, and numbers'
      // ];
      $request->validate([
         'email' => 'required|email',
         'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/s'
      ]);
      if(Auth::attempt($request->only('email','password'))){
         Auth::attempt($request->only('email','password'));
         if(auth()->user()->role == 'admin'){
            return redirect('/dashboard-admin');
         }elseif(auth()->user()->role == 'approver'){
            return redirect('/dashboard-approver');
         }else{
            return redirect('/dashboard');
         }
      }else{
         return redirect('/login')->with('alert','Account does not exist');
      }
      
     }
     public function logout()
     {
      Auth::logout();
      return redirect('/login');
     }
     public function forgot()
     {
      return view('auths.forgot');
     }
}

