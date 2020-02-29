@extends('layout.lefttap')
@section('title','Client Data')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
                <h3>Table of Sales({{$data->total()}})</h3>
              </div>
                  
                 <form id="demo-form2" action="search" method="post" data-parsley-validate class="form-horizontal form-label-left">
                     {{csrf_field()}}
<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                     
                    <input type="text" name="no" class="form-control" placeholder="Search By Number...">
                    <span class="input-group-btn">
                      <button class="btn btn-default"  type="submit">Go!</button>
                    </span>
                
                  </div>
                         @if( count($errors) > 0)
       @foreach ( $errors->all() as $error)
        {{ $error  }}
        @endforeach
        @endif 
                </div>
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
                    <h2>Sales Data({{$data->currentPage()}}) <small>Download All Record in Excel Formate &nbsp;&nbsp;&nbsp;</small></h2>
                     <a href="export/xlsx" class="btn btn-success">Export to .xlsx</a>
<a href="export/xls" class="btn btn-primary">Export to .xls</a>
 
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
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            All data of client that is submit by forms.
                          </p>

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Phone no</th>
                                <th>City</th>
                                 <th>Status</th>
                                <th>Lead Type</th>
                                <th>Saler Name</th>
                                <th>Date</th>
                                   
                               
                               
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                              </tr>
                            </thead>


                            <tbody>
                                 @foreach($data as $d)
                              <tr>
                                 
                                <td>{{$d->first_name}}</td>
                                <td>{{$d->number}}</td>
                                <td>{{$d->city}}</td>
                                <td>{{$d->status}}</td>
                                <td>{{$d->lead_type}}</td>
                               
                                <td>{{$d->submit_by}}</td>
                                <td>{{$d->created_at}}</td>
                                  
                                  <td> 

                                     <a href="details/{{$d->id}}.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> 
                  <a href="details/updatedds/{{$d->id}}" class="btn btn-primary btn-xs">Update</a>


                                  </td>
                                      
                              </tr>
                            @endforeach
                             
         
                            </tbody>
                          </table>
                        </div>
                      </div>
                        
                    </div>{{$data->links()}}
                  </div>
                </div>
              </div>
                </div>
              </div>
                    
                  </div>
                
          
       
@endsection