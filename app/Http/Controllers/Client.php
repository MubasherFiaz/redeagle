<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportController;

class Client extends Controller
{
          public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout()
    {
        Auth::logout();
            return redirect('login-form.php');     

    }   
   public function export($type)
    {
           $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
       // return Excel::download(new ExportController, 'posts.' . $type);
        return Excel::download(new ExportController, 'lead.xlsx');
    }
   public function insertt(Request $req)
    {
       //print_r($req->all());exit();
    
  
       $validatedData = $req->validate([
'first_name'=>'required',
'last_name'=>'required',
'number'=>'required|alpha_num|unique:clientts',
'address'=>'required',
'city'=>'required',
'state'=>'required',
'zip'=>'required|alpha_num',
'lead_type'=>'required',
'status'=>'required',
 'submit_by_id'=>  'required',                       
 'nameofadmin'=>  'required', 


                         ]);
     // print_r(Auth::user()->name);exit();
        \App\clientt::create([
'first_name'=> $req['first_name'],
'last_name'=>$req['last_name'],
'number'=>$req['number'],
'address'=>$req['address'],
'city'=>$req['city'],
'state'=>$req['state'],
'zip'=>$req['zip'],
'lead_type'=>$req['lead_type'],
'status'=>$req['status'],

'submit_by'=>$req['nameofadmin'],
'submit_id'=>$req['submit_by_id'],

 
            ]);
       //  print_r(Auth::user()->name);exit();
            return redirect('addrecord.php')->with('message','New Client data is Submitted Successfully');     
  
    }
    public function update(Request $req)
    {
          
   $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
       $validatedData = $req->validate([
        
'first_name'=>'required',
'last_name'=>'required',
'address'=>'required',
'city'=>'required',
'state'=>'required',
'zip'=>'required',
'lead_type'=>'required',
'status'=>'required',

 'submit_by_id'=>  'required',                       
 'submit_by'=>  'required',                       
                                 ]);
     // print_r( $req['id']);exit();
        
        
        \App\clientt::where('id', $req['id'])
        ->update([
'first_name'=> $req['first_name'],
'last_name'=>$req['last_name'],
'number'=>$req['number'],
'address'=>$req['address'],
'city'=>$req['city'],
'state'=>$req['state'],
'zip'=>$req['zip'],
'lead_type'=>$req['lead_type'],
'status'=>$req['status'],




            ]);
        //print_r($req['id']);exit();
     //print_r($req['id']);exit();
           return redirect()->to('details/'.$req['id'])->with('message','You update the fields Successfully');   

    }
            public function client_data()
    {
        $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
            $data=\App\clientt::orderBy('id', 'desc')->paginate(50);
            return view('client_data',compact('data'));
    }             
            public function client_data_sale_person($id)
    {
             
            $data=DB::select("SELECT * FROM clientts where `submit_id`=$id AND `created_at` >= NOW() - INTERVAL 30 DAY");
            // print_r($data->all());exit();
            return view('client_data_saleperson',compact('data'));
    }       
    public function details_client_data($id)
    {
         $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
         $data=\App\clientt::find($id);
         //print_r($data->all());exit();
     
         return view('client_details',compact('data'));
    }  
   
    public function details_client_data_saleperson($id)
    {
         $data=\App\clientt::find($id);
         //print_r($data->all());exit();
     
         return view('client_details_saleperson',compact('data'));
    }    
    public function update_record($id)
    {
           $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
         $data=\App\clientt::find($id);
         //print_r($data);exit();
     
         return view('update_record',compact('data'));
    }
    public function search(Request $req)
    {
           $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
      //print_r($req->no);exit();
         $no=$req->no;
        //print_r($no);exit();
        
         $dataa=DB::select("SELECT * FROM clientts where `number`=$no");
      // print_r($dataa);exit();
     
         return view('client_data_search')->with('dataa',$dataa);
    }
}
