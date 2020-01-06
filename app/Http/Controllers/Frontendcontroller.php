<?php

namespace App\Http\Controllers;
use App\Adminn;
use Illuminate\Http\Request;
use Validator;
Use DB;
use App\Http\Requests;

class frontendcontroller extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function dash()
    {
        return view('dashboard');
    }      
 
  
   public function welcome()
   {
    return view('auth.register'); 
   }
   public function addrecord()
    {
        return view('addrecord');
    }   
    public function addadmin()
    {
        $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
        return view('addadmin');
    }
       
    public function insertadmin_data(Request $data)
    {
        //print_r($req->all());exit();
        

       $validatedData = $data->validate([
       
            'name'=>'required|max:60|min:3|unique:users',
            'address'=>'required|max:40|min:4',             'email'=>'required|max:40|min:4|email|unique:users',     
            'number'=>'required|unique:users',                     
            'password'=>'required|max:40|min:4',         
            'post_of_admin'=>'required', 
          'img'=>'required', 
          
        ]);
        //print_r($data->img);exit();
        if($data->hasFile('img') && $data->img->isValid())
        {
            $extension=$data->img->extension();
            $filename=time()."_.".$extension;
          //  $pathToStore = $data->file('img')->store('./public_html/public/images',$filename); 
        $data->img->move('personal/public/images', $filename);
        }
    
        //print_r($filename);exit();
        \App\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address'=>$data['address'],
            'number'=>$data['number'],
            'post_of_admin'=>$data['post_of_admin'],
            'img'=>$filename,
        ]);
      //\App\User::create($req->all());
        return redirect('admin.php')->with('message','New Admin is Created Sucessfully');     
    }
    
     public function delete_saler_account($id)
    {
       
         $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
        DB::select("DELETE FROM `users` WHERE `id`=$id");
        

       
        return redirect('admindetails.php')->with('message','Account Deleted Sucessfully');     

    }   
    
    

    
    
    
    
    
    
          public function adminlogin()
    {
        return view('login');
    }       
    
                public function admindetails()
    {  
        $role = auth()->user()->post_of_admin;
       
        if($role==0)
        {
            return redirect('error.php');
            exit();
        }
          $data=\App\User::where('post_of_admin',0)->orwhere('post_of_admin',1)->paginate(10);
           // $data=DB::select("SELECT * FROM users where `post_of_admin`=1 AND `post_of_admin` = 0 ")->paginate(10);
                    //print_r($data);exit();
        return view('admindetails',compact('data'));
    }
    public function singleadmin()
    {
        return view('singleadmin');
    }
      
    
}
