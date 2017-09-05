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

    function PostLogin()
    {
      
    }
}
