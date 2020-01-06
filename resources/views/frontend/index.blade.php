
<!doctype html>
<style>
    .len{
        height: 10%;
    }
    .mov{
        padding: 6%;
         }
    .col{
        color: rgba(237,22,22,0.8);
    }
    .blr{
        -webkit-filter:blur(0.8px);
        -moz-filter:blur(0.8px);
        -o-filter:blur(0.8px);
        filter: blur(0.8px);
    }
    @media (max-width:620px)
    {
        img#optionals{
            display: none;
        }
    }
    @media (max-width:620px)
    {
        img#top{
            width: 420px;
            height: 470px;
        }
    }

</style>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="ZLDgKqV8R9iCkuQgW0WNgqbZEGRYLV8xecYXRhH9IV8" />
        <link rel="icon" href="{{asset('public/frontend/img/redlogo.png')}}" type="image/png">
        <title>Red Eagle</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/vendors/swiper/css/swiper.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
      </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href=""><img src="{{asset('public/frontend/img/mainlogoo.png')}}" style="padding-bottom:20%" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item"><a class="nav-link" href="">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="#aboutus">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="#services">Services</a>
				 
								<li class="nav-item"><a class="nav-link" href="#contactus">Contact</a></li>
                             		</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								<li class="nav-item"><a href="#"><i ></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="{{asset('public/frontend/img/slider/slider-1.jpg')}}" id="top" width="1920" height="500" alt="">
						<div class="slider_text_inner">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<div class="slider_text">
										<h2>Red Eagle</h2>
											<p>The fastest way to grow your business with the leader in Technology
                                                Check out our options and features included..</p>
											<a class="banner_btn" href="#contactus">Contact Us</a>
												</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<div class="swiper-slide"><img src="{{asset('public/frontend/img/slider/slider-2.jpg')}}" id="top" width="1920" height="500"  alt="">
						<div class="slider_text_inner">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<div class="slider_text">
											<h3>Our Software House</h3>
											<p>We are an Independent team of highly qualified IT specialists. We offer a full spectrum of services in the domains of software development and Networking. Red Eagles provides IT Consultancy, web design and development, ERP solution and services, Data Analytics as well as hardware and network services. A Commitment to Quality has always been the driving principle of Red Eagles activities..</p>
											<a class="banner_btn" href="#contactus">Contact Us</a>	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    			<div class="swiper-slide"><img src="{{asset('public/frontend/img/slider/3.jpg')}}" id="top"  width="1920" height="500" alt="">
						<div class="slider_text_inner">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<div class="slider_text">
											<h3>Our Call Center</h3>
											<p>Meet the Most Amazing Call Center Experts Working at Red Eagles offers best sales jobs and has provided amazing career opportunities to our very ambitious call center professionals. Let see what some of the call center experts have to say about their experience at Red Eagles..</p>
										<a class="banner_btn" href="#contactus">Contact Us</a>	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Mission Area =================-->
         <section class="mission_area">
			<div class="row m0 mov">
				<h2>Welcome to Red Eagle Communications</h2>
											<p>
 One of the Best organizations in Pakistan, we give quality administrations at reasonable rates to our customers. Our tremendous experience proves to be useful to make top of the line answers for our customers. Our services are process driven and additionally solid, snappy and adaptable to coordinate your financial plan and time rules.                                               
Red Eagle Communications was founded to provide Quality services upholding industry standards by a group of experts who have excelled in the industry in the past decades in international market.
The company management brings over many years of professional experience in the BPO & Marketing industry, working for various American clients and is committed to excel in operational performance and productivity by aligning people, processes and technology practices</p>
											
			</div>
        </section>
        <section class="mission_area">
               <a name="aboutus"/>
        
			<div class="row m0">
				<div class="col-lg-6 col-md-6 col-sm-6 p0">
					<div class="left_img len"><img id="optionals"  src="{{asset('public/frontend/img/mission-1.jpg')}}" height="730" alt=""></div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-4 p0">
					<div class="mission_slider owl-carousel">
						<div class="item">
							<div class="mission_text">
								<h4>Road to Success</h4>
								<p>With Red Eagle Communications, outsourcing is not just about cutting costs and saving money. It is about how to do things quicker, more efficiently, getting to the market faster than your competitors, maximizing workforce flexibility and gaining access to highly qualified employees. Work with us and see how your profits grow.</p>
							</div>
									<div class="mission_text">
								<h4>Customer Focus</h4>
								<p>Customer satisfaction resonates throughout the entire organization. From customer service representatives to Developers and from the client services team to the executive team, each employee is educated on the importance of consistently delivering the high quality of customer contact our clients require. We determine the best techniques and solutions for measuring customer satisfaction, which can include our own as well as third-party and client-based systems.</p>
							</div>
						</div>
						<div class="item">
							<div class="mission_text">
								<h4>Results Driven Culture</h4>
								<p>Whether exceeding client revenue goals through accounts receivable management or improving customer satisfaction and loyalty through customer relationship management, our team of customer contact professionals make, exceeding client expectations their number one goal. Our incentive based culture ensures that the team is highly motivated to reach our clients' objectives and provide the top quality customer contact they require..</p>
							</div>
					
                            <div class="mission_text">
								<h4>About Our Mission</h4>
								<p>Our clients access our world-class expertise through a team of highly qualified professionals, performance-driven programs, and a demonstrated retention strategy; our staff is well-versed in both outsourcing best practices and in our clients' business practices, culture and needs.</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </section>
        <!--================End Mission Area =================-->
          <section class="project_know_area p_120">
        	<div class="container">
        		<div class="project_know_inner text-center">
        			<h3>Get to Know Project Estimate?</h3>
        			<p>If you want to contact us to discuss your project and any other favor then please contact us and get free estimate of your project.</p>
        			<a class="white_btn" href="#contactus">Get Free Estimate</a>
                       <a name="services"/>
        
        		</div>
        	</div>
        </section>
      <br/>    <br/>    <br/>    <br/>    <br/>
        <!--================Success Area =================-->
       <!--================End Success Area =================-->
        
        <!--================Project Area =================-->
         <!--================End Project Area =================-->
        
        <!--================Team Area =================-->
         <section class="team_area">
                <center><h1>Our Services</h1></center>
                <center>(Swap to check all services)<br></center>
          
        	<div class="team_slider owl-carousel">
        		<div class="item">
        			<div class="team_item mov">
        			<img class="blr" src="{{asset('public/frontend/img/team/out.jpg')}}" alt="" height="300" >
        					<div class="hover_text">
                                
        						<div class="col"><h4>Inbound</h4> </div>
        					<ul class="list">
                         <font color="red"> 
                             <strong>
                             <li>Customer Service & Order Taking</li><br>
                                 <li>Help Desk & Technical Support</li><br></strong></font>
        						</ul>
        				</div>
        			</div>
        		</div>
        		<div class="item">
        			<div class="team_item mov">
        				<img class="blr" src="{{asset('public/frontend/img/team/6.jpg')}}" alt="" height="300" >
        				<div class="hover_text">
                             <a> <h4>  Outbound  </h4> </a>
        					  <ul class="list">
        						<font color="red">
                                    <strong>
                                Mortgage & Auto Insurance<br>
        						Lead Generation & Final Expence <br>
                                    </strong>  </font>
        						</ul>
        				</div>
        			</div>
        		</div>
        		<div class="item">
        			<div class="team_item mov">
        				<img class="blr" src="{{asset('public/frontend/img/team/web.jpg')}}" alt="" height="300">
        				<div class="hover_text">
        					<a><h4>Web Design <br> and Development </h4></a>
        						<ul class="list">
        				<font color="red">
                            <strong>
                            <li>We provide responsive, interactive </li> <br>
        						<li> web development </li>
                                <li> for all platforms.</li></strong></font>
        						</ul>
        				</div>
        			</div>
        		</div>
<div class="item">
        			<div class="team_item mov">
        				<img class="blr" src="{{asset('public/frontend/img/team/2.jpg')}}" alt="" height="300" >
        				<div class="hover_text">
        					<a><h4>Back Office <br> Processing</h4></a>
        					<ul class="list">
        			<font color="red">			
                    <strong>  
                        <li>Data Entry</li><br>
                        <li>Transcription & Research</li><br></strong> </font>
        							</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
      <!--================End Team Area =================-->
        
        <!--================Project Details Area =================-->
        <!--================End Project Details Area =================-->
        
        <!--================Home Blog Area =================-->
       <section class="p_120">
            <center><h1>Contact Us</h1><br></center>
        
           <a name="contactus"/>
            <div class="container">
              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Islamabad, Pakistan</h6>
                                <p>Ghouri Town</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+92 (300) 5963 326 </a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">shaheryarhafeez@gmail.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="emailsend" method="post" id="contactForm" novalidate="novalidate">
                             {{csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
          <!--================End Home Blog Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="">
          	<div class="container">
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
			</div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/popper.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/stellar.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
        <script src="{{asset('public/frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/swiper/js/swiper.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/theme.js')}}"></script>
    </body>
</html>