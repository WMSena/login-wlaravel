<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    function getLogin()
    {
      return view('login');
    }

    function postLogin(Request $req)
    {
      $user= User::where('name', $req->user)->first();
      if($user->password !== $req->pass){
        return redirect('login')->with('error','Password Salah');
      }else{
         return redirect('/dashboard');
      }
    }
}
