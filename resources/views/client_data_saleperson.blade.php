@extends('layout.lefttap')
@section('title','Client Data')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
                <h3>Table of Sales</h3>
              </div>
                <form id="demo-form2" action="search" method="post" data-parsley-validate class="form-horizontal form-label-left">
                     {{csrf_field()}}
<div class="title_right">
                </div>
            </form>
            </div>
            <div class="clearfix"></div>

            <div class="row">
             
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sales Data<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            All Leads of client that is submit by forms.
                          </p>

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Status</th>
                                
                                  
                              </tr>
                            </thead>


                            <tbody>
                                 @foreach($data as $d)
                              <tr>
                                 
                                <td>{{$d->first_name}}</td>
                                <td>{{$d->created_at}}</td>
                                
                                 <td> <center> <a class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> {{$d->status}} </a></center>  </td>
                                      
                              </tr>
                            @endforeach
                             
         
                            </tbody>
                          </table>
                        </div>
                      </div>
                        
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
                    
                  </div>
                
          
       
@endsection