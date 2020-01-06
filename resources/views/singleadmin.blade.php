 @extends('layout.lefttap')
@section('title','Admin Details')
@section('contents')
       <!-- Bootstrap -->
  <style>
      .cen{
        align-self: center;
      }

</style>	       


<!-- page content -->
          
            <div class="page-title">
              <div class="title_left">
                <h3>Profile</h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      
                      </div>

                      <div class="clearfix"></div>

                      <div class="cen col-md-12 col-sm-12 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                         
                            <div class="left col-xs-7">
                              <h1>{{Auth::user()->name}}</h1><br><br>
                                <center>
                                     
                        @if ( Auth::user()->post_of_admin == 1 )
                                <h2>You are Sale Person </h2>
                                @else
                                   <h2>You are  Manager</h2> 
                                @endif
                             
                                <h3>Email Address: </h3><h4> {{Auth::user()->email}}</h4>
                              <ul class="list-unstyled">
                                <h3>   <li><i class="fa fa-building"></i> Address: <br>  </h3> <h4>
                                  {{Auth::user()->address}}</h4></li><h3>
                                <li><i class="fa fa-phone"></i> Phone #:</h3> <h4>{{Auth::user()->number}}</h4></li>
                                </ul>
                              </center>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{asset('public/images/'.Auth::user()->img)}}" alt="" class="img-circle profile_img">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>Account Creation Date and time:</a>
                               <a>{{Auth::user()->created_at}}</a>
                                
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> Change Details
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                   </div>
                  </div>
                </div>
             
        <!-- /page content -->
@endsection