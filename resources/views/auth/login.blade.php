

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="{{asset('public/images/redlogo.png')}}" type="image/png">
      
    <title>Red Eagel | Login</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('public/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {{csrf_field()}} 
               <h1><font color="red">Login Form</font></h1>
                   @if(session('message'))
           <span style='color:green; font-size:30px'>  {{session('message')}}</span><br>
                    @endif 
              <div>
                   <input type="text" name="email" class="form-control" placeholder="Email" required/>
                   @if ($errors->has('email'))

               
                  {{ $errors->first('email') }}
                    @endif
              </div>
              <div>
                    <input name="password" type="password" class="form-control" placeholder="Password" required/>
                   @if ($errors->has('password'))
              
                  {{ $errors->first('password') }}
                   @endif
                 
              </div>
              <div>
                   <button id="send" type="submit" class="btn btn-default submit">Log in</button>
             
                          </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <img src="{{asset('public/images/mainlogo.png')}}" alt="..." class="">
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
              
              
              
           
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
           <h6>To Create an account please contact the Manager of the company to register your self..</h6>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <img src="{{asset('public/images/mainlogo.png')}}" alt="..." class="">
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

