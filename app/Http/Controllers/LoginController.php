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
      $user= User::where('username', $req->username)->first();
      if($user->password !== $req->password){
        return redirect('login')->with('error','Password Salah');
      }
    }
}
