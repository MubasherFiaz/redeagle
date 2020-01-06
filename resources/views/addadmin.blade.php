@extends('layout.lefttap')
@section('title','Admin Forms')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
                <h3>Admin Form</h3>
              </div>

           
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form <small>Add Admin</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
 
<form id="demo-form2" action="insertadmin" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
      
                      <p>Add Details of Admin. <code>parsleyJS</code> check out in the <a>form page</a>
                      </p>
                      <span class="section">Personal Info</span>
          
          {{csrf_field()}}
                      <div class="item form-group">
     @if( count($errors) > 0)
       @foreach ( $errors->all() as $error)
        <span style='color:red'>{{ $error  }}</span><br>
        @endforeach
        @endif
   @if(session('message'))
           <span style='color:green; font-size:30px'>  {{session('message')}}</span><br>
@endif             
     
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
 <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" value="{{old('name')}}" placeholder="both name(s) e.g Jon Doe" required="required" type="text" required>
                        </div>
                      </div>
                
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Image of Admin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
<input type="file" id="file" name="img" data-validate-minmax="10,100"  value="{{old('img')}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
<input type="number" id="number" name="number" required="required" data-validate-minmax="10,100"  value="{{old('number')}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="name"  value="{{old('address')}}" type="text" name="address" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
          <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Post OF Admin</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="form-control" name="post_of_admin">
                            <option value="0">Sale Person</option>
                            <option value="1">Manager</option>
                           
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12"   for="name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" type="text" name="email" data-validate-length-range="5,20" value="{{old('email')}}" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>   
        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
             <input id="name" name="password" value="{{old('password')}}" type="password" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>       
       
        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      </form>
                      </div>
                    
                  </div>
                </div>
              </div>
          
       
@endsection