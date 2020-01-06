<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Adminn;

class login extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

 
      public function adminlogin()
    {
        return view('login-form.php');
    }
        

}
