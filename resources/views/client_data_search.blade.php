@extends('layout.lefttap')
@section('title','Client Data')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
              
                    	    @if( count($dataa) >0)
                    <h3>Details of Client</h3>
                   @else
                   <h3>Sorry Record of this input number is not found in database.</h3>
                @endif	
              </div>

           
            </div>
            <div class="clearfix"></div>

            <div class="row">
             
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                        @foreach($dataa as $data)
                    <h2>{{$data->first_name}} <small>Client</small></h2>
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
										<td>House Type  </td>
										<td>{{$data->house_type}}</td>
									</tr>
									<tr>
										<td>Loan type</td>
										<td>{{$data->loan_type}}</td>
                                    </tr>
                                    <tr>
                                        <td>House Value :</td>
										<td>{{$data->house_value}}</td>
									</tr>
                                    <tr>
                                        <td>2nd Mortgage Balance </td>
										<td>{{$data->mortgage_balance_1}}</td>
									</tr>
                                    <tr>
                                        <td>1st interest Rate</td>
										<td>{{$data->interest_rate_1}}</td>
									</tr>                                    
                                    <tr>
                                        <td>1st Rate type </td>
										<td>{{$data->rate_type_1}}</td>
                                   
									</tr>   
                                    <tr>
                                        <td>2st Mortgage Balance </td>
										<td>{{$data->mortgage_balance_2}}</td>
                                   
									</tr>
                                    <tr>
                                        <td>2nd Interst Rate: </td>
										<td>{{$data->interest_rate_2}}</td>
                                   
									</tr>
                                    <tr>
                                        <td>2nd Rate type</td>
										<td>{{$data->rate_type_2}}</td>
                                  </tr>
                                     <tr>
                                        <td>Cashout</td>
										<td>{{$data->cashout}}</td>
                                  </tr>
                                     <tr>
                                        <td>Ltv</td>
										<td>{{$data->ltv}}</td>
                                  </tr>
                                     <tr>
                                        <td>Credit Rating</td>
										<td>{{$data->credit_rating}}</td>
                                  </tr>
                                     <tr>
                                        <td>Late Payments</td>
										<td>{{$data->late_payments}}</td>
                                  </tr>
                                     <tr>
                                        <td>Last Refinance</td>
										<td>{{$data->last_refinance}}</td>
                                  </tr>
                                     <tr>
                                        <td>Foreclosure</td>
										<td>{{$data->foreclosure}}</td>
                                  </tr>
                                     <tr>
                                        <td>Employments</td>
										<td>{{$data->employment}}</td>
                                  </tr>
                                     <tr>
                                        <td>Lo</td>
										<td>{{$data->lo}}</td>
                                  </tr>
                                     <tr>
                                        <td>Textarea</td>
										<td>{{$data->textarea}}</td>
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
                    @endforeach
       
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