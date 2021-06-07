<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AE Solutions</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
      
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
      <div>
            @if (Route::has('login'))
                <div class=" top-0 right-0" style="z-index: 1000; position: fixed;">
                    @auth
                        <a href="{{ url('/dashboard') }}" style="margin-left:10px;">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" style="margin-left:10px; ">Log in</a>

                         @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="margin-right:10px; margin-left:10px">Register</a>
                        @endif 
                    @endauth
                </div>
            @endif
      </div>
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
                          <li class="active"><a href="#page-top">Inicio</a></li>
                          <li><a href="#services">Servicios</a></li>
                          <li><a href="#about">Nosotros</a></li>
                          
                          <li><a href="#clientes">Clientes</a></li>
                          
                  
                          <li><a href="#contact">Contacto</a></li>
                          <li><a href="#policy">Calidad</a></li>
        
        
        
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
        
                       <ul style="margin-left: 65px;" class="nav navbar-nav page-scroll pull-rigth">
                          <li><a href="{{route('home')}}">Espa&ntilde;ol</a></li>
                          <li><a href="{{route('home2')}}">English</a></li>
                          <li><a href="http://www.facebook.com/pages/AESolutions/116445135184447" target="_blank"> <img src="img/fb1.png" class="img-responsive" alt="Responsive image" >
                            </a></li>
                          <li><a href="https://www.linkedin.com/company/ae-solutions" target="_blank"> <img src="img/in1.png" class="img-responsive" alt="Responsive image" >
                            </a></li>
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
                   <img src="img/visuales-01.png" class="img-responsive">
                   <div class="hidden-sm hidden-xs">
                    <p class="lead">Ofrecemos soluciones <br>en automatizaci&oacute;n de maquinaria</p>
        
                    
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
                   <img src="img/visuales-02.png" class="img-responsive">
                   <div class="hidden-sm hidden-xs">
                    <p class="lead">Contamos con servicio y disponibilidad<br> 24x7 los 365 d&iacute;­as del a&ntilde;o</p>
                   
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
                  <img src="img/visuales-03.png" class="img-responsive">
                   <div class="hidden-sm hidden-xs">
                    <p class="lead">Tecnolog&iacute;a y especializaci&oacute;n en soluciones </p>
                    
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
               <h2>Somos especialistas</h2>
               
              </div>
             </div>
             <div class="container">
              <div class="row">
               <!-- item 1-->
               <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="img-wrapper">
                   <img src="img/circulos-08.png" alt="" class="img-responsive"/>
                </div>
                <h4>Automatizaci&oacute;n</h4>
                <p class="margin">Profesionales en integraci&oacute;n de sistemas de automatizaci&oacute;n para hacer m&aacute;s eficiente cualquier proceso industrial. 
                </p>
               </div><!-- /col-md-4-->
               
               <!-- item 2-->
               <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-wrapper">
                   <img src="img/circulos-09.png" alt="" class="img-responsive"/>
                </div>
                <h4>Consultor&iacute;a</h4>
                <p class="margin">Ingenieros y t&eacute;cnicos capaces de trabajar en equipo con usted para proponer soluciones innovadoras y efectivas que permitan alcanzar sus objetivos.
                </p>
               </div><!-- /col-md-4-->
               
               <!-- item 3-->
               <div class="col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="img-wrapper">
                   <img src="img/circulos-10.png" alt="" class="img-responsive"/>
                </div>
                <h4>Programaci&oacute;n</h4>
                <p>Especialistas en programaci&oacute;n de las principales marcas de equipos de automatizaci&oacute;n industrial.
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
              <h2>Nuestros servicios</h2>
              
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
                   <h6>Programaci&oacute;n de PLC's</h6>
                          </div>
                          <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                             
                             <!-- Number 2 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal2">
                                <img src="img/icono-02.png" class="img-responsive">
                              </a>
                              </center>
                   <h6>Diagramas el&eacute;ctricos de potencia y de control</h6>
                          </div>
                          <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                             
                             <!-- Number 3 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal3">
                                <img src="img/icono-03.png" class="img-responsive">
                              </a>
                              </center>
                            
                             <h6>Dise&ntilde;o y programaci&oacute;n de HMI</h6>
                          </div>
                          <div class="col-md-3 col-sm-6" style="margin-bottom:50px">
                             
                             <!-- Number 4 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal4">
                                <img src="img/icono-04.png" class="img-responsive">
                              </a>
                              </center>
                            
                   <h6>Redes industriales</h6>
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
                             
                   <h6>Sistemas de seguridad</h6>
                          </div>
                          <div class="col-md-3 col-sm-6 res-margin" style="margin-bottom:50px">
                             
                             <!-- Number 2 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal6">
                                <img src="img/icono-06.png" class="img-responsive">
                              </a>
                              </center>
                             
                   <h6>Control de motores</h6>
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
                             
                   <h6>Soluci&oacute;n de problemas</h6>
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
                             
                   <h6>Armado de tableros el&eacute;ctricos</h6>
                          </div>
                          <div class="col-md-3 col-sm-6 res-margin">
                             <!-- Number 2 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal10">
                                <img src="img/icono-10.png" class="img-responsive">
                              </a>
                              </center>
                             
                   <h6>Instalaciones el&eacute;ctricas</h6>
                          </div>
                          <div class="col-md-3 col-sm-6 res-margin">
                             <!-- Number 3 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal11">
                                <img src="img/icono-11.png" class="img-responsive">
                              </a>
                              </center>
                             
                             <h6>Entrenamiento en sistemas de automatizaci&oacute;n </h6>
                          </div>
                          <div class="col-md-3 col-sm-6">
                             <!-- Number 4 -->
                              <center>
                                <a href="#" data-toggle="modal" data-target="#myModal12">
                                <img src="img/icono-13.png" class="img-responsive">
                              </a>
                              </center>
                             
                   <h6>Fabricaci&oacute;n de Etiquetas Lamicoid</h6>
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
               <h2>Nosotros</h2>
               
              </div>
             </div>
              <!--
              <div class="col-md-12 col-sm-12 col-centered">
               <div class="centered-pills">
                
                <ul class="nav nav-pills">
                   <li class="active"><a href="#pane1" data-toggle="tab">Nosotros</a></li>
                   <li><a href="#pane2" data-toggle="tab">Experiencia</a></li>
                   
                </ul>
               </div>
              </div>
              -->
             <div class="container">
              <!-- Panels start -->	
              <div class="tabbable">
               <div class="tab-content">
                <!-- Panel  1 -->
                <div id="pane1" class="paneltab tab-pane fade active in">
                   <div class="row">
                    <div class="col-md-12 col-sm-12">
                     <div class="col-lg-6 col-sm-12 res-margin wow fadeInRight" data-wow-delay="0.2s">
                      <h3>Comprometidos con la calidad de nuestros servicios</h3>
                      <p class="text-justify">Empresa fundada en el a&ntilde;o 2012 en la ciudad de San Luis Potos&iacute;, S.L.P. que comienza operaciones con personal de larga experiencia en el ramo de la automatizaci&oacute;n industrial. AE Solutions comienza a hacerse un lugar en la industria nacional e internacional y se coloca como una empresa s&oacute;lida y en desarrollo siendo sin&oacute;nimo de confianza por nuestro enfoque en el desarrollo de nuestros clientes.</p>
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
                <div id="pane2" class="paneltab tab-pane fade active in">
                  <div class="row">
                   <div class="col-lg-6 col-sm-12 res-margin">
                    <h3>Especialistas en Estampado y Prensas</h3>
                    <p><img src="img/vineta-azul-08.png"> Carrocer&iacute;­as<br>
                      <img src="img/vineta-azul-08.png"> Soldaduras<br>
                      <img src="img/vineta-azul-08.png"> Especialistas en Estampado y Prensas<br>
                      <img src="img/vineta-azul-08.png"> Transportadores<br>
                      <img src="img/vineta-azul-08.png"> Error proofing (pokayokes)<br>
                      <img src="img/vineta-azul-08.png"> Sistema de seguridad<br>
                      <img src="img/vineta-azul-08.png"> Sistemas de visi&oacute;n<br>
                      <img src="img/vineta-azul-08.png"> Ahorro de energ&iacute;a<br>
                      <img src="img/vineta-azul-08.png"> Control de motores<br>
                      <img src="img/vineta-azul-08.png"> Servo motores<br>
                      <img src="img/vineta-azul-08.png"> Pintura<br>
                      <img src="img/vineta-azul-08.png"> Alimentos y bebidas<br>
                   </div>
                   <div class="col-lg-6 col-sm-12" style="margin-top: 90px">
                     <!-- Responsive video -->
                    <div class="embed-responsive embed-responsive-16by9">
                     
                     <video controls muted> <source src="img/ae.mp4" type="video/mp4" ></video>
                    </div>
                   </div>
                  </div>
                </div><!-- / Panel 2 ends -->
                
                
              </div><!-- /.tab-content -->
              </div><!-- /.tabbable -->
        
        
        
        
        
        
        
        
        
        
                 <!-- <div class="col-md-12 col-sm-12 col-centered">
               <div class="centered-pills">
                
                <ul class="nav nav-pills">
                 
                  <li><a href="#pane2" data-toggle="tab">Experiencia</a></li>
                   
                </ul>
               </div>
              </div>-->
             <div class="container">
              <!-- Panels start --> 
              <div class="tabbable">
               <div class="tab-content">
               
                
                <!-- Panel 2 -->
                <div id="pane2" class="paneltab tab-pane fade">
                  <div class="row">
                   <div class="col-lg-6 col-sm-12 res-margin">
                    <h3>Especialistas en Estampado y Prensas</h3>
                    <p><img src="img/vineta-azul-08.png"> CarrocerÃ­as<br>
                      <img src="img/vineta-azul-08.png"> Soldaduras<br>
                      <img src="img/vineta-azul-08.png"> Especialistas en Estampado y Prensas<br>
                      <img src="img/vineta-azul-08.png"> Transportadores<br>
                      <img src="img/vineta-azul-08.png"> Error proofing (pokayokes)<br>
                      <img src="img/vineta-azul-08.png"> Sistema de seguridad<br>
                      <img src="img/vineta-azul-08.png"> Sistemas de visiÃ³n<br>
                      <img src="img/vineta-azul-08.png"> Ahorro de energÃ­a<br>
                      <img src="img/vineta-azul-08.png"> Control de motores<br>
                      <img src="img/vineta-azul-08.png"> Servo motores<br>
                      <img src="img/vineta-azul-08.png"> Pintura<br>
                      <img src="img/vineta-azul-08.png"> Alimentos y bebidas<br>
                   </div>
                   <div class="col-lg-6 col-sm-12" style="margin-top: 90px">
                    <!-- Responsive video -->
                    <div class="embed-responsive embed-responsive-16by9">
                     
                     <video controls muted> <source src="img/ae.mp4" type="video/mp4" ></video>
                    </div>
                   </div>
                  </div>
                </div><!-- / Panel 2 ends -->
                
                
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
        
        
         <center>
        <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript"></script> 
                          <!--
                           <a href="img/sello-electronico.pdf" target="_blank"> <img src="img/d&b.png" class="img-responsive" style="">
                           </a>-->
                           </center>
                      <br><br>
        
        
              <!-- Section heading -->
              <div class="section-heading">
               <h2>Contacto</h2>
              
              </div>
             </div>
             <div class="container">
               <div class="row">
              <div class="margin col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
               <!-- Contact info -->
               
               <p>Para m&aacute;s informaci&oacute;n:</p><hr>
        
                     <p> Calle. I. Zaragoza No.151<br>
                            Colonia. Cuartel Aguilares<br>
                            Delegaci&oacute;n. Villa de Pozos,<br>
                            San Luis Potos&iacute;, S.L.P.<br>
                            C.P. 78421
                     </p><hr>
        
               <p><a href="mailto:contacto@ae-sol.net">contacto@ae-sol.net</a></p>
               <hr>
               <p>Tel&eacutefono oficina matriz: <br>+52 (444) 353 2787</p><hr>
        <p>Ventas, S.L.P: <br> +52 1 (444) 444 6028</p><hr>
        <p></p>
        
                 
               <!-- Adress info -->
               
              </div>
              <div class="col-md-7 col-md-offset-1 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
               <!-- Contact form -->
               <div class="form-style" id="contact_form">
                <div id="contact_results"></div>
                <div class="form-group">
                   <input type="text" name="name" class="form-control input-field" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                   <input type="email" name="email" class="form-control input-field"  placeholder="Correo" required>
                </div>
                <div class="form-group">
                   <input type="text" name="subject" class="form-control input-field" placeholder="Asunto" required>
                </div>
                <div class="form-group">
                   <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Informaci&oacute;n" required></textarea>
                </div>
                <div class="form-group">
                   <button type="submit" id="submit_btn" value="Submit" class="btn btn-default pull-right">Enviar</button>
                </div>				
               </div><!--/Contact form -->	
              </div><!-- /col-md-6 -->
            </div><!-- /row -->		  
             </div><!-- /container-->	   
          </section>
          <!--Map -->
          <div class="wow fadeInTop" data-wow-delay="0.2s">
             <div id="map-canvas">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3696.5411938478014!2d-100.8670177!3d22.1053322!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDA2JzE4LjEiTiAxMDDCsDUxJzU0LjIiVw!5e0!3m2!1ses-419!2smx!4v1459979862804" style="width: 1900px; height: 400px;" frameborder="0" style="border:0" class="img-responsive"  ></iframe>
          
             </div>
          </div>
          <!-- Section ends -->
                
           <!-- Policy -->
           <section id="policy" class="home-section">
             <div class="col-lg-8 col-lg-offset-2 cuadroTextoPoliticas tamanoCuadroPoliticas"  >
              <div class="section-heading" >
                   <br>
               <h2>Politica de Calidad AE Solutions </h2>
                  <br>
                  <div class="paneltab tab-pane fade active in textoPoliticas" align="justify" style="margin-left: 30px; margin-right: 30px;">
                    <div class="row" style="float: left; height: 400px ">
                     <p style="color:white"><strong>AE Solutions:</strong> Organizaci&oacute;n dedicada a la Automatizaci&oacute;n Industrial 
                       ubicada en Calle I. Zaragoza 151, Col. Cuartel Aguilares, San Luis Potos&iacute;, M&eacute;xico, ha decidido implantar un 
                       Sistema de Gesti&oacute;n de la Calidad basado en la norma ISO 9001 para mejorar el servicio que presta a sus clientes.</p>
                    <br><br>
                    <p style="color:white">La Direcci&oacute;n de AE SOLUTIONS enfoca el Sistema de la Calidad como una manera de organizar 
                       el funcionamiento, partiendo de uno de los pilares b&aacute;sicos como son la Calidad de sus servicios, la 
                       Satisfacci&oacute;n del cliente y la Mejora continua de la eficacia del Sistema. Para ello, su Sistema de Gesti&oacute;n de 
                       la Calidad se basa en: 
                    </p>
                    <Ul>
                       <li style="color:white"><p style="color:white">La Calidad y su mejora son responsabilidad de todos los integrantes de AE SOLUTIONS 
                          empezando desde arriba.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad se obtiene planificando, ejecutando, revisando y 
                          mejorando el Sistema de Gesti&oacute;n, teniendo presente en todo momento el contexto de la Organizaci&oacute;n, tanto 
                          interno como externo.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad est&aacute; orientada hacia la satisfacci&oacute;n de todos nuestros 
                          clientes (y partes interesadas) mediante el compromiso de toda la Organizaci&oacute;n en el cumplimiento de sus 
                          necesidades y requisitos, as&iacute; como los requisitos legales y reglamentarios.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad nos dirige al incremento de la productividad de nuestros clientes.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad se apoya en la Mejora Continua tanto de los procesos 
                          productivos y de prestaci&oacute;n del servicio, como de la eficacia del Sistema de Gesti&oacute;n de la Calidad en el que 
                          prevenir los errores sea un aspecto fundamental.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad nos lleva a prestar la m&aacute;xima atenci&oacute;n a la 
                          evoluci&oacute;n tecnol&oacute;gica y a las posibles mejoras que las nuevas tecnolog&iacute;as pusieran a nuestra disposici&oacute;n.</p></li>
                       <li style="color:white"><p style="color:white">Mantener actualizados tanto el Manual como los Procedimientos 
                          de Calidad, de acuerdo con la realidad cambiante de la Compa&ntilde;&iacute;a y el mercado.</p></li>
                       <li style="color:white"><p style="color:white">La Calidad requiere de la participaci&oacute;n y colaboraci&oacute;n de todos 
                          por lo que esta Pol&iacute;tica es difundida a todo el personal de AE SOLUTIONS para su conocimiento y comprensi&oacute;n.</p></li>
                    </Ul>
                    <br><br>
                    <p style="color:white">La presente politica es el marco para generar los objetivos de calidad de AE SOLUTIONS</p>
                    <br>
                    <p style="color:white">Para la aplicaci&oacute;n efectiva de estos principios, es absolutamente necesario el apoyo a los mismos tanto del equipo directivo como de la plantilla.</p>
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
                
               </div>
               <!-- Bottom Credits -->
               <div class="col-sm-6 col-md-offset-5 col-md-3 text-center">
                <p>COPYRIGHT © 2016 AE Solutions</p>
               </div>			 
              </div><!-- /row-->
             </div><!-- /container -->
             <!-- Go To Top Link -->
             <div class="page-scroll hidden-sm hidden-xs">
              <a href="#page-top" class="back-to-top"><i class="fas fa-angle-up" ></i></a>
             </div>
          </footer>
        
        
        
        <!--modal1-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Programaci&oacute;n PLC's</h4>
              </div>
              <div class="modal-body">
               <p>Manejo de las principales marcas del mercado:
              <br>
              <br>
               <img src="img/vineta-14.png"> Programaci&oacute;n de PLC&rsquo;S 
                 <br>
                   <img src="img/vineta-14.png">  Allen Bradley
                   <br>
                   <img src="img/vineta-14.png">  Siemens
                   <br>
                  <img src="img/vineta-14.png">  Mitsubishi
                   <br>
                  <img src="img/vineta-14.png">  Koyo</p>
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
                <h4 class="modal-title" id="myModalLabel">Diagramas elÃ©ctricos de potencial y de control </h4>
              </div>
              <div class="modal-body">
               <p>Realizamos sus diagramas el&eacute;ctricos de potencia y de control bajo los est&aacute;ndares especificados y normas internacionales.</p>
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
                <h4 class="modal-title" id="myModalLabel">Dise&ntilde;o y programaci&oacute;n de HMI</h4>
              </div>
              <div class="modal-body">
               <p>Dise&ntilde;amos y programamos Interfaces Humano - M&aacute;quina (IHM o HMI por sus siglas en ingl&eacute;s) para la visualizaci&oacute;n y correcta operaci&oacute;n de su m&aacute;quina de una manera amigable y entendible para el operador.</p>
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
                <h4 class="modal-title" id="myModalLabel">Redes industriales</h4>
              </div>
              <div class="modal-body">
               <p>Instalamos, configuramos, comisionamos y programamos las principales redes industriales del mercado:<br>
                <br>
        <img src="img/vineta-14.png">  Ethernet
        <br>
        <img src="img/vineta-14.png">  DeviceNet
        <br>
        <img src="img/vineta-14.png">  ControlNet
        <br>
        Entre otras
        <br>
        <br>
        Seguimos todas las normas y recomendaciones aplicables para asegurar el correcto funcionamiento de su red evitando problemas de comunicaci&oacute;n que generan tiempos muertos en su m&aacute;quina.
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
                <h4 class="modal-title" id="myModalLabel">Sistemas de seguridad</h4>
              </div>
              <div class="modal-body">
               <p>Instalaci&oacute;n, configuraci&oacute;n, programaci&oacute;n y puesta en marcha de sistemas de seguridad para proteger al operador: 
               <br>
               <br>
                <img src="img/vineta-14.png">  PLCs de seguridad<br>
             <img src="img/vineta-14.png">  Cortinas de luz<br>
               <img src="img/vineta-14.png">  Paros de emergencia<br>
               <img src="img/vineta-14.png">  Sistemas redundantes<br>
               <img src="img/vineta-14.png">  Detectores de presencia con programaci&oacute;n de &Aacute;rea<br>
               <img src="img/vineta-14.png">  Control de acceso a la m&aacute;quina o celda<br>
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
                <h4 class="modal-title" id="myModalLabel">Control de Motores</h4>
              </div>
              <div class="modal-body">
               <p>Selecci&oacute;n, configuraci&oacute;n, soluci&oacute;n de fallas de variadores de velocidad (VFDs) y servos.</p>
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
              <p>Asignaci&oacute;n de personal calificado para atenci&oacute;n de tiempo completo a sus necesidades de automatizaci&oacute;n para:<br>
                 <br>
                <img src="img/vineta-14.png">  Soluci&oacute;n de problemas<br>
                <img src="img/vineta-14.png">  Creaci&oacute;n de est&aacute;ndares<br>
                <img src="img/vineta-14.png">  Revisi&oacute;n de m&aacute;quinas existentes<br>
                <img src="img/vineta-14.png">  Revisi&oacute;n adecuada de m&aacute;quinas a comprar<br>
                <img src="img/vineta-14.png">  Reducci&oacute;n de tiempo de ciclo<br>
                <img src="img/vineta-14.png">  Mejoras a sus l&iacute;­neas de producci&oacute;n<br>
                Etc.<br>
        
               <br>Personal asignado por horas, d&iacute;­as, semanas, meses, o como se necesite.</p>
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
                <h4 class="modal-title" id="myModalLabel">SoluciÃ³n de Problemas</h4>
              </div>
              <div class="modal-body">
               <p>Porque sabemos que la producci&oacute;n contin&uacute;a d&iacute;­a y noche y los tiempos muertos tienen un alto impacto, <b>estamos disponibles 24x7 los 365 d&iacute;as del a&ntilde;o</b> para ayudarlo a resolver sus problemas de automatizaci&oacute;n de cualquiera de sus m&aacute;quinas.</p>
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
                <h4 class="modal-title" id="myModalLabel">Armado de Tableros ElÃ©ctricos</h4>
              </div>
              <div class="modal-body">
               <p>Armamos tableros el&eacute;ctricos de potencia y de control de acuerdo a las normas de calidad m&aacute;s estrictas:<br>
                <br>
                 <img src="img/vineta-14.png">  Centros de Control de Motores<br>
                <img src="img/vineta-14.png">  Tableros de Control con PLC<br>
                <img src="img/vineta-14.png">  Gabinetes de I/O remoto<br>
                <img src="img/vineta-14.png">  Botoneras<br>
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
                <h4 class="modal-title" id="myModalLabel">Instalaciones El&eacute;ctricas</h4>
              </div>
              <div class="modal-body">
               <p>Instalaci&oacute;n de sistemas el&eacute;ctricos bajo normas internacionales:<br>
               <img src="img/vineta-14.png">  Tableros el&eacute;ctricos<br>
               <img src="img/vineta-14.png">  Tuber&iacute;a conduit<br>
               <img src="img/vineta-14.png">  Charola<br>
               <img src="img/vineta-14.png">  Ruteo de cableado<br>
               <img src="img/vineta-14.png">  Etiquetado<br>
               <img src="img/vineta-14.png">  Redes industriales <br>
               <img src="img/vineta-14.png">  Conexi&oacute;n de equipos
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
                <h4 class="modal-title" id="myModalLabel">Entrenamiento en Sistemas de Automatizaci&oacute;n</h4>
              </div>
              <div class="modal-body">
               <p>Ofrecemos cursos est&aacute;ndar de:<br>
              <img src="img/vineta-14.png">  Programaci&oacute;n de PLCs de diversas marcas<br>
               <img src="img/vineta-14.png">  Redes Industriales<br>
               <img src="img/vineta-14.png">  IHM <br>
               <img src="img/vineta-14.png">  AutoCad<br>
               <img src="img/vineta-14.png">  Diagramas el&eacute;ctricos (norma americana y europea)</p>
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
                <h4 class="modal-title" id="myModalLabel">Fabricaci&oacute;n de etiquetas lamicoid</h4>
              </div>
              <div class="modal-body">
                <p>Fabricaci&oacute;n de etiquetas para la identificaci&oacute;n y marcaje de equipo en campo y gabinetes de fuerza y control.</p>
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