 @extends('layout.lefttap')
@section('title','Admin Details')
@section('contents')
       <!-- Bootstrap -->
  	       


<!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admins Details</h3>
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
 <span style='color:green; font-size:30px'>  {{session('message')}}</span><br>
  @if( count($data) >0)                      
                        @foreach($data as $d)
                        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you Sure?</h4>
        </div>
        <div class="modal-body">
          <p>Do you want to delete this Sales Man.  </p>
        </div>
        <div class="modal-footer">

          <a href="delete_saler/{{$d->id}}" class="btn btn-danger btn-lg"><i class=""></i> Delete </a>
          <button type="button" class="btn  btn-lg" data-dismiss="modal">Cancel</button>
        </div>
      </div>
                  </div>
            
                </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> 
                            @if ($d->post_of_admin ==0)
                                Sale Person 
                                @else
                                Manager 
                                @endif</i></h4>
                            <div class="left col-xs-7">
                              <h2>{{$d->name}}</h2>
                              <p><strong>Email : </strong> {{$d->email}} </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: {{$d->address}}</li>
                                <li><i class="fa fa-phone"></i> Phone #: {{$d->number}}</li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                            
                                 <img src="{{asset('personal/public/images/'.$d->img)}}" alt="Not Found" class="img-circle profile_img">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-12 emphasis">
                              <p class="ratings">
                                <a>User Creation Date and time:</a>
                               <a>{{$d->created_at}}</a>
                                
                              </p>
                            </div>
                           
                          </div>
                          <center>               
          <a href="delete_saler/{{$d->id}}" class="btn btn-danger btn-xs"><i class=""></i> Delete </a>
                              
                  </center> 
                        </div>
                      </div>
                       

                    @endforeach()
                        @else
                        No record Found 
                        @endif  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
        <!-- /page content -->
@endsection