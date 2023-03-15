<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
     public function login()
     {
        return view('auths.login');
     }
     public function postlogin(Request $request)
     {
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
         return redirect('/login');
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

