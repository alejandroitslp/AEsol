<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="SUMA Web Diseño">
      <!-- Page title -->
      <title>AE-Solutions</title>
	  
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.js"></script>
      <![endif]-->
	  
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	  
      <!-- Icon fonts -->
      <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
	  
      <!-- Google fonts -->
      <!--
      <link href='http://fonts.googleapis.com/css?family=Nunito:300,400,700' rel='stylesheet' type='text/css'>-->
	  <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

      <!-- Css Animations -->
      <link href="css/animate.css" rel="stylesheet" />
	  
      <!-- Theme CSS -->
      <link href="css/style.css" rel="stylesheet">
	  
	  <!-- Color Style CSS -->
      <link href="styles/bluesky.css" rel="stylesheet">
	  
	  <!-- Prefix free CSS -->
	  <script src="js/prefixfree.js"></script>
	  
      <!-- Owl Slider & Prettyphoto -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/prettyPhoto.css">
	  
	<!-- Switcher Only -->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />

	<!--Alternate CSS -->

    <link rel="alternate stylesheet" type="text/css" href="styles/bluesky.css" title="bluesky" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/redpet.css" title="redpet" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/greenfun.css" title="greenfun" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/cleanbrown.css" title="cleanbrown" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/yellowpaws.css" title="yellowpaws" media="all" />

      <!-- Favicons-->
      
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">	

	<!-- Begin Inspectlet Embed Code 
	<script type="text/javascript" id="inspectletjs">
	window.__insp = window.__insp || [];
	__insp.push(['wid', 1035388931]);
	(function() {
	function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
	document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', __ldinsp) : window.addEventListener('load', __ldinsp, false)) : __ldinsp();

	})();
	</script>
	 End Inspectlet Embed Code -->  
   </head> 
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Start Switcher -->
		
    <!-- End Switcher -->	
            <!-- Preloader -->
		<div id="preloader">
			<div class="spinner">
				<div class="rect1"></div>
				<div class="rect2"></div>
				<div class="rect3"></div>
				<div class="rect4"></div>
				<div class="rect5"></div>
			</div>
		</div>					
	<!-- Navbar -->	  
      <nav class="navbar navbar-custom navbar-fixed-top">
	  		
			
         <div class="container">
         <!-- navbar -->		 
            <div class="navbar-header page-scroll">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
               <i class="fa fa-bars"></i>
               </button>
               <!-- Logo -->
               <div class="page-scroll">
                  <a class="navbar-brand" href="#page-top">
				  <!--Font Icon logo and text -->
                     <img src="img/logw.jpg">
                  </a>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
               <ul class="nav navbar-nav page-scroll">
                  <li class="active"><a href="#page-top">Home</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#about">About us</a></li>
                  
                  <li><a href="#clientes">Customers</a></li>
                  
				  
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#policy">Quality</a></li>
                  <!--<li>
                      <center>
                  	<a href="index.html"> 
                       <img src="img/mexico-01.png" class="img-responsive" alt="Responsive image" style="margin-top: 25px; margin-left: 40px;">
                      MÃ©xico
                  	</a>
                      </center>

                  </li>	
                  
                  	<li>
                  		<center>
                  		<a href="index2.html"><img src="img/usa-02.png" class="img-responsive" alt="Responsive image" style="margin-top: 25px; margin-left: 40px;">
                        </a>
                        </center>
                   </li> -->
                   

               </ul>

               <ul style="margin-left: 20px;" class="nav navbar-nav page-scroll pull-rigth">
                  <li><a href="{{route('home')}}">Espa&ntilde;ol</a></li>
                  <li><a href="{{route('home2')}}">English</a></li>
                  <li><a href="http://www.facebook.com/pages/AESolutions/116445135184447" target="_blank"> <img src="img/fb1.png" class="img-responsive" alt="Responsive image" >
                  	</a></li>
                  <li><a href="https://www.linkedin.com/company/ae-solutions" target="_blank"> <img src="img/in1.png" class="img-responsive" alt="Responsive image" >
                  	</a></li>
                     <li style="margin-left: 30px; margin-top: 10px">
                        @if (Route::has('login'))
                          <div>
                            @auth
                              <a href="{{ url('/dashboard') }}" style="margin-left:10px;">Dashboard</a>
                        @else
                          <a href="{{ route('login') }}">
                            <svg width="24px"  height="24px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#0070C0">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                          </a>
            
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="margin-right:10px; margin-left:10px">Register</a>
                        @endif  --}}
                            @endauth
                          </div>
                        @endif
                      </li>
                </ul>
            </div>
         </div>
      </nav><!-- Navbar ends -->
	<!-- Full Page Image Background Slider -->
	<div class="slider-container">
	<!-- Controls -->
	   <div class="slider-control left inactive"></div>
	   <div class="slider-control right"></div>
		   <ul class="slider-pagi"></ul>
	   <!--Slider -->
	   <div class="slider">
	   <!-- Slide 1 -->
		  <div class="slide slide-0 active">
			 <div class="slide__bg"></div>
			 <div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				   <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
				   <img src="img/visuales-04.png" class="img-responsive">
				   <div class="hidden-sm hidden-xs">
					  <p class="lead">Solutions in <br>machinery automation</p>

					  
				   </div>
				</div>
			 </div>
		  </div>
		 <!-- Slide 2 -->
		  <div class="slide slide-1">
			 <div class="slide__bg"></div>
			 <div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				   <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
           <img src="img/visuales-05.png" class="img-responsive">
				   <div class="hidden-sm hidden-xs">
					  <p class="lead">We service and availability<br> 24x7 365 days a year</p>
					 
				   </div>
				</div>
			 </div>
		  </div>
		  <!-- Slide 3-->
		  <div class="slide slide-2">
			 <div class="slide__bg"></div>
			 <div class="slide__content">
				<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
				   <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
				</svg>
				<div class="slide__text">
				  <img src="img/visuales-06.png" class="img-responsive">
				   <div class="hidden-sm hidden-xs">
					  <p class="lead">Technology and specialization in solutions </p>
					  
				   </div>
				</div>
			 </div>
		  </div>
		 
	   </div>
	</div>	
	<!--/ Slider ends -->
				
    <!-- Section services -->
	<section id="services" class="home-section">


	   <div class="col-lg-8 col-lg-offset-2">


		 <!-- Section heading -->
		  <div class="section-heading">
		  <img src="img/rayo-11.png"><br><br>
			 <h2>We are specialists</h2>
			 
		  </div>
	   </div>
	   <div class="container">
		  <div class="row">
			 <!-- item 1-->
			 <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="img-wrapper">
				   <img src="img/circulos-08.png" alt="" class="img-responsive"/>
				</div>
				<h4>Automation</h4>
				<p class="margin">Professional integration of automation systems to make more efficient any industrial process. 
				</p>
			 </div><!-- /col-md-4-->
			 
			 <!-- item 2-->
			 <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="img-wrapper">
				   <img src="img/circulos-09.png" alt="" class="img-responsive"/>
				</div>
				<h4>Consultancy</h4>
				<p class="margin">Engineers and technicians capable of making a team with you to propose innovative and effective solutions to achieve your goals.
				</p>
			 </div><!-- /col-md-4-->
			 
			 <!-- item 3-->
			 <div class="col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
				<div class="img-wrapper">
				   <img src="img/circulos-10.png" alt="" class="img-responsive"/>
				</div>
				<h4>Programming</h4>
				<p>Programming specialists of the leading brands of industrial automation equipment.
				</p>
			 </div><!-- /col-md-4-->
		  </div>
	   </div>
	</section>
	<!-- /Section ends -->	  
	
    <!-- Section Stats -->	
    <section id="stats" class="home-section">
		<div class="col-lg-8 col-lg-offset-2">
		   <!-- Section Heading -->	
			<div class="section-heading">
			<h2>Our Services</h2>
			
		 </div>
		</div>
         <div class="container">
            <div class="row">
               <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     
                     <!-- Number 1 -->
                     <center>
                     <a href="#" data-toggle="modal" data-target="#myModal">
                     <img src="img/icono-01.png" class="img-responsive">
                     </a></center>  
				   <h6>PLC's Programming</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     
                     <!-- Number 2 -->
                      <center>
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                      	<img src="img/icono-02.png" class="img-responsive">
                      </a>
                      </center>
					 <h6>Electric diagrams (power and control)</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     
                     <!-- Number 3 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal3">
                      	<img src="img/icono-03.png" class="img-responsive">
                      </a>
                      </center>
                    
                     <h6>HMI programming and design</h6>
                  </div>
                  <div class="col-md-3 col-sm-6" style="margin-bottom:50px">
                     
                     <!-- Number 4 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal4">
                      	<img src="img/icono-04.png" class="img-responsive">
                      </a>
                      </center>
                    
					 <h6>Industrial Networks</h6>
                  </div>
               </div>
            </div>


            <div class="row">
               <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     
                     <!-- Number 1 -->
                     <center>
                     	<a href="#" data-toggle="modal" data-target="#myModal5">
                     	<img src="img/icono-05.png" class="img-responsive">
                     </a>
                     </center>
                     
					 <h6>Safety systems</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     
                     <!-- Number 2 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal6">
                      	<img src="img/icono-06.png" class="img-responsive">
                      </a>
                      </center>
                     
					 <h6>Motor control</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                     <!-- Number 3 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal7">
                      	<img src="img/icono-07.png" class="img-responsive">
                      </a>
                      </center>
                     
                     <h6>Outsourcing</h6>
                  </div>
                  <div class="col-md-3 col-sm-6" style="margin-bottom:50px">
                     <!-- Number 4 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal8">
                      	<img src="img/icono-08.png" class="img-responsive">
                      </a>
                      </center>
                     
					 <h6>Troubleshooting</h6>
                  </div>
               </div>
            </div>



<div class="row">
               <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                  <div class="col-md-3 col-sm-6 res-margin">
                     <!-- Number 1 -->
                     <center>
                     	<a href="#" data-toggle="modal" data-target="#myModal9">
                     	<img src="img/icono-09.png" class="img-responsive">
                     </a>
                     </center>
                     
					 <h6>Electrical panels assembly</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin">
                     <!-- Number 2 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal10">
                      	<img src="img/icono-10.png" class="img-responsive">
                      </a>
                      </center>
                     
					 <h6>Electrical installations</h6>
                  </div>
                  <div class="col-md-3 col-sm-6 res-margin">
                     <!-- Number 3 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal11">
                      	<img src="img/icono-11.png" class="img-responsive">
                      </a>
                      </center>
                     
                     <h6>Automation systems training</h6>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <!-- Number 4 -->
                      <center>
                      	<a href="#" data-toggle="modal" data-target="#myModal12">
                      	<img src="img/icono-13.png" class="img-responsive">
                      </a>
                      </center>
                     
					 <h6>Lamicoid plates fabrication</h6>
                  </div>
               </div>
            </div>







         </div>
    </section>
	<!-- Section Ends-->
	  
    <!-- Section About -->	
	<section id="about" class="home-section" style="background-image: url('img/fondo1.png');">
	   <div class="col-lg-8 col-lg-offset-2">
	   	<!-- Section Heading -->	
		  <div class="section-heading">
			 <h2>About us</h2>
			 
		  </div>
	   </div>
		  <div class="col-md-12 col-sm-12 col-centered">
			 <div class="centered-pills">
				<!-- Navigation -->
				<ul class="nav nav-pills">
				   <li class="active"><a href="#pane1" data-toggle="tab">About us</a></li>
				   <li><a href="#pane2" data-toggle="tab">Experience</a></li>
				   
				</ul>
			 </div>
		  </div>
		 <div class="container">
		  <!-- Panels start -->	
		  <div class="tabbable">
			 <div class="tab-content">
				<!-- Panel  1 -->
				<div id="pane1" class="paneltab tab-pane fade active in">
				   <div class="row">
					  <div class="col-md-12 col-sm-12">
						 <div class="col-lg-6 col-sm-12 res-margin wow fadeInRight" data-wow-delay="0.2s">
							<h3>Committed to the quality of our services</h3>
							<p class="text-justify">Company founded in 2012 in the city of San Luis Potos&iacute;­, S.L.P. starting operations with long experience in the industrial automation field.
								<br>AE Solutions starts to get a place in the national and international industry, and stands as a solid and growing company being synonymous with trust because of our customer development focus.</p>
						 </div>					 
						 <div class="col-lg-6 col-md-12 col-lg-offset-0 col-md-offset-1 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
							<center><img src="img/foto-nosotros.jpg" alt="" class="img-responsive"/></center>
						 </div>
					  </div>
					  <!-- icons -->
					
					
					  
				   </div>
				 </div> 
				<!-- Panel 1 ends -->
				
				<!-- Panel 2 -->
				<div id="pane2" class="paneltab tab-pane fade">
				  <div class="row">
				   <div class="col-lg-6 col-sm-12 res-margin">
					  <h3>Presses and Stamping Specialists</h3>
              <img src="img/vineta-azul-08.png"> Bodyshop<br>
              <img src="img/vineta-azul-08.png"> Welding control<br>
              <img src="img/vineta-azul-08.png"> Presses and Stamping specialists<br>
              <img src="img/vineta-azul-08.png"> Conveyors<br>
              <img src="img/vineta-azul-08.png"> Error proofing (pokayokes)<br>
              <img src="img/vineta-azul-08.png"> Safety systems<br>
              <img src="img/vineta-azul-08.png"> Vision systems<br>
              <img src="img/vineta-azul-08.png"> Energy saving<br>
              <img src="img/vineta-azul-08.png"> Motor control<br>
              <img src="img/vineta-azul-08.png"> Servo Motor<br>
              <img src="img/vineta-azul-08.png"> Paint shop<br>
              <img src="img/vineta-azul-08.png"> Food and beverage<br>
				   </div>
				   <div class="col-lg-6 col-sm-12" style="margin-top: 90px">
				   	<!-- Responsive video -->
					  <div class="embed-responsive embed-responsive-16by9">
						 
						 <video controls muted> <source src="img/ae.mp4" type="video/mp4" ></video>
					  </div>
				   </div>
				  </div>
				</div><!-- / Panel 2 ends -->
				
				<!-- Panel  3 -->
				<div id="pane3" class="paneltab tab-pane fade text-center">
				 <div class="row">
				   <h3>Meet our Team</h3>
				   <!-- Item 1 -->
				   <div class="team">
					  <div class="col-md-3 col-sm-6">
						 <div class="img-wrapper">
							<img src="img/team1.jpg" alt="" class="img-responsive"/>
						 </div>
						 <!-- Caption -->
						 <div class="caption-team">
							<h5>Luane Silva </h5>
							<span>Veterinarian</span>
							<p>Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh imperdiet interdum.</p>
						 </div>
						 <!-- Social icons -->
						 <div class="social-media margin">
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-linkedin"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
							<a href="#" title=""><i class="fa fa-instagram"></i></a>
						 </div>
					  </div>
					  <!-- Item 2 -->
					  <div class="col-md-3 col-sm-6">
						 <div class="img-wrapper">
							<img src="img/team2.jpg" alt="" class="img-responsive"/>
						 </div>
						 <!-- Caption -->
						 <div class="caption-team">
							<h5>John Suen</h5>
							<span>Caretaker</span>
							<p>Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh imperdiet interdum.</p>
						 </div>
						 <!-- Social icons -->
						 <div class="social-media margin">
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-linkedin"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
							<a href="#" title=""><i class="fa fa-instagram"></i></a>
						 </div>
					  </div>
					  <!-- item 3 -->
					  <div class="col-md-3 col-sm-6">
						 <div class="img-wrapper">
							<img src="img/team3.jpg" alt="" class="img-responsive"/>
						 </div>
						 <!-- Caption -->
						 <div class="caption-team">
							<h5>Nancy May</h5>
							<span>Specialist</span>
							<p>Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh imperdiet interdum.</p>
						 </div>
						 <!-- Social icons -->
						 <div class="social-media margin">
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-linkedin"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
							<a href="#" title=""><i class="fa fa-instagram"></i></a>
						 </div>
					  </div>
					  <!-- Item 4 -->
					  <div class="col-md-3 col-sm-6">
						 <div class="img-wrapper">
							<img src="img/team4.jpg" alt="" class="img-responsive"/>
						 </div>
						 <!-- Caption -->
						 <div class="caption-team">
							<h5>Amelie Plin</h5>
							<span>Veterinarian</span>
							<p>Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh imperdiet interdum.</p>
						 </div>
						 <!-- Social icons -->
						 <div class="social-media">
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-linkedin"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
							<a href="#" title=""><i class="fa fa-instagram"></i></a>
						 </div>
					  </div>
				   </div>
				 </div><!-- /container-->
			   </div><!-- /panel 3 ends -->
			</div><!-- /.tab-content -->
		  </div><!-- /.tabbable -->
	   </div><!-- /container-->
	</section>
	<!-- Section ends-->
	
		
	
	<!-- Section Offers -->
  <section id="testimonials" class="home-section" style="background: url('img/fondo5.jpg') center fixed; min-height: 900px;height: auto;">
     <div class="col-lg-8 col-lg-offset-2">
      <!-- Section Heading -->
      <div class="section-heading">

              <div class="row" id="clientes">
                <h2>Clientes</h2>
                <br><br>

                  <div class="col-md-3" >
                     <img src="img/logotipos-01.png" >
                  </div>


                  <div class="col-md-3">
                     <img src="img/logotipos-02.png" >
                  </div>
                  
                  <div class="col-md-3 ">
                     <img src="img/logotipos-03.png" >
                  </div>
                  <div class="col-md-3 ">
                     <img src="img/logotipos-04.png" >
                  </div>
                  
              </div>

              <div class="row">
                <div class="col-md-3 ">
                   <img src="img/logotipos-07.png" >
                </div>
                <div class="col-md-3 ">
                   <img src="img/aa.png" >
                </div>
                <div class="col-md-3 ">
                   <img src="img/bb.png" >
                </div>
                 <div class="col-md-3 ">
                   <img src="img/faureci.png" >
                </div>
              </div>

              <div class="row">
              <div class="col-md-3 ">
                     &nbsp;
                  </div>

                  <div class="col-md-3 ">
                     <img src="img/logotipos-05.png" >
                  </div>

                  <div class="col-md-3 ">
                     <img src="img/logotipos-06.png" >
                  </div>
                  <div class="col-md-3 ">
                     &nbsp;
                  </div>

              </div>



              
             
      </div>
     </div>
  </section>
  <!-- Section ends -->   
	
	
	
    <!--
	<section id="brands" class="home-section">
	   <div class="col-lg-8 col-lg-offset-2">
	   
		  <div class="section-heading">
			 <h2>Brands we work with</h2>
			 <hr>
		  </div>
	   </div>
	   <div class="container text-center">
	   	 <div class="row">
		
		 <div class="col-sm-6 col-md-3 res-margin">
			<div class="well well-sm wow fadeInLeft">
			   <a href="#"><img src="img/client1.png" alt="client" class="col-centered img-responsive"/></a>
			</div>
		 </div>
		 
		 <div class="col-sm-6 col-md-3 res-margin">
			<div class="well well-sm wow fadeInLeft">
			   <a href="#"><img src="img/client2.png" alt="client" class="col-centered img-responsive"/></a>
			</div>
		 </div>
		
		 <div class="col-sm-6 col-md-3 res-margin">
			<div class="well well-sm wow fadeInRight">
			   <a href="#"><img src="img/client3.png" alt="client" class="col-centered img-responsive"/></a>
			</div>
		 </div>
		
		 <div class="col-sm-6 col-md-3">
			<div class="well well-sm wow fadeInRight">
			   <a href="#"><img src="img/client4.png" alt="client" class="col-centered img-responsive"/></a>
			</div>
		  </div>
		</div>  
	   </div>
	</section>
-->
     
	<!-- Section Contact -->
	<section id="contact" class="home-section">
	   <div class="col-lg-8 col-lg-offset-2">
		  <!-- Section heading -->
		  <div class="section-heading">
			 <h2>Contact</h2>
			
		  </div>
	   </div>
	   <div class="container">
	   	<div class="row">
		  <div class="margin col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
			 <!-- Contact info -->
			 
			 <p>Address:</p><hr>

             <p>  I. Zaragoza 151 <br>
                     Cuartel Aguilares<br>
                    Deleg. Villa de Pozos<br>
                    San Luis Potos&iacute;­, S.L.P., M&eacute;xico<br>
                    Zip code 78421
             </p><hr>

			 <p><a href="mailto:contacto@ae-sol.net">contacto@ae-sol.net</a></p>
			 <hr>
			 <p>Office Phone: <br>+52 (444) 353 2787</p><hr>
<p>San Luis Potos&iacute;­­, Sales Phone: <br> +52 1 (444) 444 6028</p><hr>


			   
			 <!-- Adress info -->
			 
		  </div>
		  <div class="col-md-7 col-md-offset-1 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
			 <!-- Contact form -->
			 <div class="form-style" id="contact_form">
				<div id="contact_results"></div>
				<div class="form-group">
				   <input type="text" name="name" class="form-control input-field" placeholder="Name" required>
				</div>
				<div class="form-group">
				   <input type="email" name="email" class="form-control input-field"  placeholder="E-Mail" required>
				</div>
				<div class="form-group">
				   <input type="text" name="subject" class="form-control input-field" placeholder="Subject" required>
				</div>
				<div class="form-group">
				   <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Information" required></textarea>
				</div>
				<div class="form-group">
				   <button type="submit" id="submit_btn" value="Submit" class="btn btn-default pull-right">Send</button>
				</div>				
			 </div><!--/Contact form -->	
		  </div><!-- /col-md-6 -->
		</div><!-- /row -->		  
	   </div><!-- /container-->	   
	</section>
	<!--Map -->
	<div class="wow fadeInTop" data-wow-delay="0.2s">
	   <div id="map-canvas">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1848.482866272183!2d-100.87590143693457!3d22.08912560694689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa55dfe32dac3%3A0xdf7b6fe57f530ee6!2sAE%20Solutions!5e0!3m2!1ses-419!2smx!4v1623190157526!5m2!1ses-419!2smx" style="width: 1900px; height: 400px;" frameborder="0" style="border:0" class="img-responsive"  ></iframe>
	   </div>
	</div>
	<!-- Section ends -->

   <!-- Policy -->
   <section id="policy" class="home-section" >
	   <div class="col-lg-8 col-lg-offset-2 cuadroTextoPoliticas tamanoCuadroPoliticas" >
		  <div class="section-heading" >
           <br>
			 <h2>AE Solutions Quality Policy</h2>
          <br>
          <div class="paneltab tab-pane fade active in textoPoliticas" align="justify" style="margin-left: 30px; margin-right: 30px;">
            <div class="row" style="float: left; height: 400px ">
             <p style="color:white"><strong>AE Solutions:</strong> Organization dedicated to industrial 
               automation located at I. Zaragoza 151 Col. Cuartel Aguilares, San Luis Potos&iacute;, M&eacute;xico, has decided to 
               implement a Quality Management System based on the ISO 9001 standard to improve the service it provides to 
               its clients.</p>
            <br><br>
            <p style="color:white">The Management of AE SOLUTIONS focuses on the Quality System as a way to organize 
               functionality, starting from basic pillars such as the Quality of its services, customer satisfaction and 
               the continuous improvement of the effectiveness of the System. Because of this, its Quality Management 
               System is based on:
            </p>
            <Ul>
               <li style="color:white"><p style="color:white">Quality and its improvement are the responsibility of all 
                  members of AE SOLUTIONS starting from the top.</p></li>
               <li style="color:white"><p style="color:white">Quality is obtained by planning, executing, reviewing and 
                  improving the Management System, bearing in mind at all times the context of the organization, both internal 
                  and external.</p></li>
               <li style="color:white"><p style="color:white">Quality is oriented towards the satisfaction of all our clients 
                  (and interested parties) through the commitment of the entire organization in meeting their needs and 
                  requirements, as well as legal and regulatory requirements.</p></li>
               <li style="color:white"><p style="color:white">Quality leads us to increase the productivity of our customers.</p></li>
               <li style="color:white"><p style="color:white">Quality is based on Continuous Improvement of production 
                  processes and service provided, as well as the effectiveness of the Quality Management System in which 
                  preventing errors is a fundamental aspect.</p></li>
               <li style="color:white"><p style="color:white">Quality leads us to pay utmost attention to technological 
                  evolution and the possible improvements that new technologies put at our disposal.</p></li>
               <li style="color:white"><p style="color:white">Keep the Manual and the Quality Procedures updated, according 
                  with the changing reality of the Company and the market.</p></li>
               <li style="color:white"><p style="color:white">Quality requires the participation and collaboration of everyone 
                  so this Policy is spread to every member of AE SOLUTIONS staff for their knowledge and understanding.</p></li>
            </Ul>
            <br><br>
            <p style="color:white">This policy is the framework to generate quality objectives of AE SOLUTIONS.</p>
            <br>
            <p style="color:white">In order to make an effective application of these principles, the support of the management .team and the staff is absolutely necessary.</p>
            <br>
            </div>
          </div>
		  </div>
	   </div>
	</section>
			  
    <!-- Footer -->	
	<footer>
	   <div class="container">
		  <div class="row wow fadeInUp" data-wow-delay="0.2s">
			 <div class="col-sm-6 col-md-4">
			 <!-- Social Media icons -->	
				 <!--<ul class="social-media">
				   <li>
            <center>
                  	<a href="http://www.facebook.com/pages/AESolutions/116445135184447" target="_blank"> <img src="img/fb.png" class="img-responsive" alt="Responsive image" style="margin-left: 40px;">
                  	</a>
                  	<a href="https://www.linkedin.com/company/ae-solutions" target="_blank"> <img src="img/in.png" class="img-responsive" alt="Responsive image" style="margin-left: 40px;">
                      </center>
                   </li>  
				  
				   
				</ul> -->
			 </div>
			 <!-- Bottom Credits -->
			 <div class="col-sm-6 col-md-offset-5 col-md-3 text-center">
				<p>COPYRIGHT Â© 2016 AE Solutions</p>
			 </div>			 
		  </div><!-- /row-->
	   </div><!-- /container -->
	   <!-- Go To Top Link -->
	   <div class="page-scroll hidden-sm hidden-xs">
		  <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
	   </div>
	</footer>



<!--modal1-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PLC's Programming</h4>
      </div>
      <div class="modal-body">
       <p>We work with the leading brands:
      <br>
      <br>
       <img src="img/vineta-14.png">Allen Bradley
       	<br>
           <img src="img/vineta-14.png"> Siemens
           <br>
           <img src="img/vineta-14.png"> Mitsubishi
           <br>
          <img src="img/vineta-14.png">  Koyo
           <br>
          <img src="img/vineta-14.png">  Among others</p>
          <center>
          <img src="img/foto-01.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal2-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Electric diagrams (Power and Control)</h4>
      </div>
      <div class="modal-body">
       <p>We make your electrical diagrams (power and control) under specified standards and international regulations.</p>
       <center>
          <img src="img/foto-02.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal3-->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">HMI Programming and Design</h4>
      </div>
      <div class="modal-body">
       <p>We design and program Human-Machine interfaces (HMIs) for monitoring and operation of your machine in a friendly and understandable way for the operator.</p>
       <center>
          <img src="img/foto-03.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal4-->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Industrial Networks</h4>
      </div>
      <div class="modal-body">
       <p>We do design, installation, configuration, commissioning, and programming of the leading industrial networks:<br>
        <br>
<img src="img/vineta-14.png">  Ethernet
<br>
<img src="img/vineta-14.png">  DeviceNet
<br>
<img src="img/vineta-14.png">  ControlNet
<br>
<img src="img/vineta-14.png">  Among others
<br>
We follow all norms and recommendations applicable to ensure the correct operation of your network to avoid communication problems that generate downtime on your machine.
       </p>
       <center>
          <img src="img/foto-04.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal5-->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Safety Systems</h4>
      </div>
      <div class="modal-body">
       <p>Installation, configuration, programming and commissioning of safety systems to protect the operator. 
       <br>
       <br>
        <img src="img/vineta-14.png">  Safety PLCâ€™s<br>
     <img src="img/vineta-14.png">  Light curtains<br>
       <img src="img/vineta-14.png">  Emergency stops<br>
       <img src="img/vineta-14.png">  Redundant systems<br>
       <img src="img/vineta-14.png">  Presence detectors with are programming<br>
       <img src="img/vineta-14.png">  Access control to cell or machine<br>
          Etc.</p>
       <center>
          <img src="img/foto-06.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal6-->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Motor Control</h4>
      </div>
      <div class="modal-body">
       <p>Selection, configuration and troubleshooting of VFD and servos.</p>
       <center>
          <img src="img/foto-05.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal7-->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Outsourcing</h4>
      </div>
      <div class="modal-body">
      <p>Assignment of qualified personnel for full-time care of your automation needs for:<br>
       	<br>
        <img src="img/vineta-14.png">  Troubleshooting<br>
        <img src="img/vineta-14.png">  Creating standards<br>
        <img src="img/vineta-14.png">  Review of existing machines<br>
        <img src="img/vineta-14.png">  Review of machines to buy<br>
        <img src="img/vineta-14.png">  Cycle time reduction<br>
        <img src="img/vineta-14.png">  Production line improvements<br>
        Etc.<br>

       <br>Personnel can be assigned by hours, days, weeks, moths, or as needed.</p>
         <center>
          <img src="img/foto-07.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal8-->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Troubleshooting</h4>
      </div>
      <div class="modal-body">
       <p>Because we know that production continues day and night and dead times have a high cost, we are available 24x7, 365 days a year to help solve your automation problems on any of your machines.</p>
       <center>
          <img src="img/foto-08.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal9-->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Electrical Panels Assembly</h4>
      </div>
      <div class="modal-body">
       <p>We assemble electrical panels (power and control) according to the strictest quality standards:<br>
        <br>
       	<img src="img/vineta-14.png">  Motor Control Centers<br>
        <img src="img/vineta-14.png">  Control panels with PLC<br>
        <img src="img/vineta-14.png">  Remote I/O panels<br>
        <img src="img/vineta-14.png">  Junction boxes<br>
         Etc.</p>
          <center>
          <img src="img/foto-09.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal10-->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Electrical Installations</h4>
      </div>
      <div class="modal-body">
       <p>Electrical systems installation under international norms:<br><br>
       <img src="img/vineta-14.png">  Electrical panels<br>
       <img src="img/vineta-14.png">  Pipeline conduit<br>
       <img src="img/vineta-14.png">  Cable tray<br>
       <img src="img/vineta-14.png">  Cable routing<br>
       <img src="img/vineta-14.png">  Labeling<br>
       <img src="img/vineta-14.png">  Industrial networks<br>
       <img src="img/vineta-14.png">  Equipment connection
       <br>Etc.</p>
       <center>
          <img src="img/foto-10.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal11-->
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Automation Systems Training</h4>
      </div>
      <div class="modal-body">
       <p>We offer courses of:<br><br>
      <img src="img/vineta-14.png">  PLC programming (leading brands)<br>
       <img src="img/vineta-14.png">  Industrial networks<br>
       <img src="img/vineta-14.png">  HMIs<br>
       <img src="img/vineta-14.png">  AutoCAD<br>
       <img src="img/vineta-14.png">  Electrical diagrams (American and European Standard)</p>
        <center>
          <img src="img/foto-11.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>

<!--modal12-->
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lamicoid plates fabrication</h4>
      </div>
      <div class="modal-body">
        <p>Lamicoid plates fabrication for identification and tagging of equipment in field and in cabinets.</p>
        <center>
          <img src="img/foto-12.png" class="img-responsive">
          </center>
      </div>
    </div>
  </div>
</div>



	<!-- /footer ends -->
	  	  	
	<!-- Core JavaScript Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Counter -->	  
	<script src="js/numscroller.js"></script>

	<!-- WOW animations -->
	<script src="js/wow.min.js"></script>

	<!-- Prettyphoto Lightbox -->
	<script src="js/jquery.prettyPhoto.js"></script>
	
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
		
	<!-- Contact form -->	  
	<script src="js/contact.js"></script>

	<!-- Isotope -->	  
	<script src="js/jquery.isotope.js"></script>

	<!-- Google maps -->	  
	
	
    <!-- All Scripts & Plugins -->
	<script src="switcher/js/dmss.js"></script>
	  
   </body>
</html>