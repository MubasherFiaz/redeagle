@extends('layout.lefttap')
@section('title','Client Data')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
                <h3>Details of Client</h3>
              </div>

           
            </div>
            <div class="clearfix"></div>

            <div class="row">
             
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$data->first_name}} <small>Client</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                            All details of client {{$data->first_name}} that is submit by forms.
                          </p>

             	<table class="details-client">
                   				

							<tr>
										<td>First Name</td>
										<td>{{$data->first_name}}</td>
									</tr>
									<tr>
										<td>Last Name :</td>
										<td>{{$data->last_name}}</td>
									</tr>
									<tr>
										<td>Number :</td>
										<td>{{$data->number}}</td>
									</tr>
                                    <tr>
										<td>Data Enter by Admin Name :</td>
										<td>{{$data->submit_by}}</td>
									</tr>
									<tr>
										<td>Address :</td>
										<td>{{$data->address}}</td>
									</tr>
									<tr>
										<td>City :</td>
										<td>{{$data->city}}</td>
									</tr>
									<tr>
										<td>State :</td>
										<td>{{$data->state}}</td>
									</tr>
									<tr>
										<td> Zip:</td>
										<td>{{$data->zip}}</td>
									</tr>
									<tr>
										<td>Lead Type </td>
										<td>{{$data->lead_type}}</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>{{$data->status}}</td>
                                    </tr>
                                
                                     <tr>
                                        <td>Created Date</td>
										<td>{{$data->created_at}}</td>
                                  </tr>
                                     <tr>
                                        <td>Last Update Date</td>
										<td>{{$data->updated_at}}</td>
                                  </tr>
                                
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
  
<style>
.details-client {
  font-size: 16px;
  line-height: 22px;
  margin-bottom: 45px;
  width: 100%;
  text-align: left;
}

@media (min-width: 768px) {
  .details-client {
    width: auto;
  }
}

.details-client th {
  padding: 4px 10px 7px;
}

.details-client tr:first-child {
  background: #e6e8ed;
}

.details-client tr td {
  padding: 4px 190px;
  background: #f5f6f8;
}

@media (min-width: 1200px) {
  .details-client tr td:first-child {
    width: 55%;
  }
}

.details-client tr:nth-child(even) td {
  background: #ffffff;
}
.model-details-box__inner {
  background: #f3f3f5;
  padding: 20px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-direction: normal;
  -webkit-box-orient: vertical;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}

@media (min-width: 1200px) {
  .model-details-box__inner {
    padding: 32px;
  }
}

@media (min-width: 768px) {
  .model-details-box__inner {
    -webkit-box-direction: normal;
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    -moz-justify-content: space-between;
    justify-content: space-between;
  }
}

.model-details-box__inner > * {
  box-sizing: border-box;
}
</style>              
          
       
@endsection