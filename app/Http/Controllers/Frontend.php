<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class frontend extends Controller
{
        public function frontendpage()
    {
        return view('frontend.index');
    } 
    
    
    
        public function sendemail(Request $data)
    {
            //print_r($data->all());exit();
       return view('frontend.contact_process',compact('data'));
     

        return \Redirect::route('/')
      ->with('message', 'Thanks for contacting us!');
      
        
        }
        
  
}
