@extends('layout.lefttap')
@section('title','Update Form')
@section('contents')
       <!-- Bootstrap -->
  	  
            <div class="page-title">
              <div class="title_left">
                  
                <h3>Update Form </h3>
              </div>

           
            </div>
            <div class="clearfix"></div>
  
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  
                <div class="x_panel">
                  <div class="x_title">
                         
               
                    <h2>Form <small>Client</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                         <li><a href="" class=" btn-round btn-default"><i class="fa fa-backward"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                       
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
 
    <form id="demo-form2" action="updateclientdata" method="post" data-parsley-validate class="form-horizontal form-label-left">
             
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
        
        
                      <p>Update the following Details of Client. <code>{{$data->number}}</code> check out in the <a href="">Client page</a>
                      </p>
                      <span class="section">Update Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" value="{{$data->first_name}}"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="first_name" placeholder="both name(s) e.g Jon Doe" required="required" type="text" required>
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="name" value="{{$data->last_name}}"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="last_name" placeholder="both name(s) e.g Jon Doe" required="required" type="text" required>
                        </div>
                      </div>
                      
              
     
                <input type="hidden" value="{{$data->number}}"  id="number"  name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="occupation" value="{{$data->address}}"  type="text" name="address" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                    <input id="occupation" value="{{$data->id}}" type="hidden" type="text" name="id" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input id="occupation" value="{{$data->city}}"  type="text" name="city" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="occupation" value="{{$data->state}}"  type="text" name="state" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Zip <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
             <input id="occupation" value="{{$data->zip}}"  type="text" name="zip" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Lead Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
    <select  class="form-control" name="lead_type">
  <option value="{{$data->lead_type}}">{{$data->lead_type}}</option>
  <option value="debt_settlement">Debt Settlement</option>
  <option value="auto_insurance">Auto Insurance</option>
  <option value="mortgage_refinance">Mortgage Refinance</option>
  <option value="tax_settlement">Tax Settlement</option>
  <option value="final_expense">Final Expense</option>
</select>                      
                
                        </div>
                      </div>
                    
                               <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
               <select  class="form-control" name="status">
  <option value="waiting">Waiting</option>
  <option value="Accept">Accept</option>
  <option value="Reject">Reject</option>
  
</select>
<input id="occupation" value="{{Auth::user()->name}}" type="hidden" name="submit_by"   class="optional form-control col-md-7 col-xs-12">  
            <input id="occupation" value="{{Auth::user()->id}}" type="hidden" name="submit_by_id" class="optional form-control col-md-7 col-xs-12">

</div></div></div>
                    
                      <div class="ln_solid"></div>
                       <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                     <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
      <script>
         $('.form-group').on('input',function()
                            {
             var totalsum=0;
             var a=0;
             var b=0;
             var c=0;
             var d=1;
              a=$('input[name="mortgage_balance_1"]').val();
              b=$('input[name="mortgage_balance_2"]').val();
              c=$('input[name="cashout"]').val();
              d=$('input[name="house_value"]').val();
             var total= [(+a)+(+b)+(+c)]/d*100;
            // var inp= document.getElementById("p");
         $('#ltv').val(total);
});
</script> 

@endsection