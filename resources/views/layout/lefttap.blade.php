<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{asset('public/images/redlogo.png')}}" type="image/png">

    <title>Red Eagle | @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{asset('public/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{action('Frontendcontroller@dash')}}" class="site_title"><img  src="{{asset('public/images/redlogo.png')}}" alt="" height="60" width="50" margin-left="10">
        				 <span>Red Eagle</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('personal/public/images/'.Auth::user()->img)}}" alt="..." class="img-circle profile_img">
             
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{action('Frontendcontroller@dash')}}"><i class="fa fa-home"></i> Home <span class="fa"></span></a>
                    
                  </li>
                  <li><a href="{{action('Frontendcontroller@addrecord')}}"><i class="fa fa-edit"></i>Add Lead<span class="fa"></span></a>
                   
                  </li>
        @if(Auth::user()->post_of_admin==0)
                 <li>
                      
                      <a href="{{url('clients/'.Auth::user()->id.'/')}}"><i class="fa fa-desktop"></i> Lead Status<span class="fa"></span></a>
                    
                 </li>
   
                 
        @else
                <li>
                      <a href="{{action('Client@client_data')}}"><i class="fa fa-desktop"></i>Lead Status <span class="fa"></span></a>
                    
                 </li>
        @endif
                 
                </ul>
              </div>
                @if(Auth::user()->post_of_admin==0)
                  @else
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a href="{{action('Frontendcontroller@addadmin')}}"><i class="fa fa-users"></i> Add Admin <span class="fa"></span></a>
                  </li>
                    </ul>
               <ul class="nav side-menu">
                  <li><a href="{{action('Frontendcontroller@admindetails')}}"><i class="fa fa-users"></i> Admin Details <span class="fa"></span></a>
                  </li>
                    </ul>
                                   
               
              </div>
@endif
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" >
                <span class="glyphicon" aria-hidden=""></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="logout"  href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" >
                <span class="glyphicon"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" >
                <span class="glyphicon " aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" 
                     data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('personal/public/images/'.Auth::user()->img)}}" alt="">{{Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{action('Frontendcontroller@singleadmin')}}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
 <!-- top navigation
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('public/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>Mobi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('public/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>Mobi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('public/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>Mobi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('public/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>Mobi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>  -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
 @yield('contents')
          </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Project of Red Eagle presented by  <a href="">Mobi</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('public/vendors/nprogress/nprogress.js')}}"></script>
    <!-- validator -->
    <script src="{{asset('public/vendors/validator/validator.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/build/js/custom.min.js')}}"></script>
	
  </body>
</html>