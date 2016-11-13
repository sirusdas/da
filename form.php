<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html lang="en">
<head>
<meta content="#fff" name="theme-color">
<meta content="#fff" name="msapplication-navbutton-color">
<meta content="#fff" name="apple-mobile-web-app-status-bar-style">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>DA-form</title>

<!-- Main CSS file -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!--  
<link rel="stylesheet" href="css/owl.carousel.css" />
<link rel="stylesheet" href="css/magnific-popup.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="css/ec.css" />
-->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/font-awesome.css" />

<!--  Material -->




<!-- Favicon -->
<link rel="shortcut icon" href="images/icon/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="images/icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="images/icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="images/icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="images/icon/apple-touch-icon-57-precomposed.png">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- PRELOADER 
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->


	<!-- HEADER -->
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><st
							style="font-weight: 600; font-size: medium;">DevChakra</st>
						<!--<img src="images/logo.png" alt="">--></a>
				</div>

<!-- 				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#header" class="nav-active">Home</a></li>
						<li><a href="#estimate">Get Estimate</a></li>
					</ul>
				</div> -->
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->

	<!-- Desc -->
	<section id="services">
		<div class="container">
			<div class="row">
			 <form id="idForm" action="php/ajax-specs.php" class="contact-form"
						name="contact-form" method="post" enctype="multipart/form-data">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Computer Specifications</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="comp_spec col-md-12">
					<h4>Processor</h4>
						<div class="row">
							<div id="processor0">
								<div class="col-sm-12">
									<input type="text" name="p_p0" required="required" size="30" id="p_p0"
												placeholder="Price*">
								</div>
							
								<div class="col-sm-12">
									<textarea name="p_c0" cols="28" rows="2" class="col-sm-12" id="p_c0"
											placeholder="Config*" required="required"></textarea>
								</div>
							</div>
						</div>							
				 
						<button type="button" class="col-sm-12" id="button_p" onclick="p_duplicate()">Add More</button>
						<br><br>
				  		
					<h4>MotherBoard</h4>
					<div class="row">
					  <div id ="mb0">
							<div class="col-sm-12">
								<input type="text" name="mb_p0" required="required" size="30" id="mb_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="mb_c0" cols="28" rows="2" class="col-sm-12" id="mb_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
					  </div>							
					</div>		
							<button type="button" class="col-sm-12" id="button_mb" onclick="mb_duplicate()">Add More</button>
						<br><br>	
							
								
					<h4>Graphic Card</h4>
					<div class="row">
						<div id="gc0">
							<div class="col-sm-12">
								<input type="text" name="gc_p0" required="required" size="30" id="gc_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="gc_c0" cols="28" rows="2" class="col-sm-12" id="gc_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>							
					</div>	
							<button type="button" class="col-sm-12" id="button_gc" onclick="gc_duplicate()">Add More</button>
					<br><br>
									
					<h4>RAM</h4>
					<div class="row">
						<div id="ram0">
							<div class="col-sm-12">
								<input type="text" name="ram_p0" required="required" size="30" id="ram_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="ram_c0" cols="28" rows="2" class="col-sm-12" id="ram_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>							
					</div>
							<button type="button" class="col-sm-12" id="button_ram" onclick="ram_duplicate()">Add More</button>
					<br><br>
										
					<h4>Power Supply</h4>
					<div class="row">
						<div id="ps0">
							<div class="col-sm-12">
								<input type="text" name="ps_p0" required="required" size="30" id="ps_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="ps_c0" cols="28" rows="2" class="col-sm-12" id="ps_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
				 		</div>				
					</div>
							<button type="button" class="col-sm-12" id="button_ps" onclick="ps_duplicate()">Add More</button>
					<br><br>
										
					<h4>Hard Drive</h4>
					<div class="row">
						<div id="hd0">
							<div class="col-sm-12">
								<input type="text" name="hd_p0" required="required" size="30" id="hd_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="hd_c0" cols="28" rows="2" class="col-sm-12" id="hd_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>				
					</div>	
							<button type="button" class="col-sm-12" id="button_hd" onclick="hd_duplicate()">Add More</button>
					<br><br>
									
					<h4>Mouse</h4>
					<div class="row">
						<div id="m0">
							<div class="col-sm-12">
								<input type="text" name="m_p0" required="required" size="30" id="m_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="m_c0" cols="28" rows="2" class="col-sm-12" id="m_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>							
					</div>	
							<button type="button" class="col-sm-12" id="button_m" onclick="m_duplicate()">Add More</button>
					<br><br>
									
					<h4>Keyboard</h4>
					<div class="row">
						<div id="k0">
							<div class="col-sm-12">
								<input type="text" name="k_p0" required="required" size="30" id="k_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="k_c0" cols="28" rows="2" class="col-sm-12" id="k_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>				
					</div>		
							<button type="button" class="col-sm-12" id="button_k" onclick="k_duplicate()">Add More</button>
					<br><br>
								
					<h4>Cabinet</h4>
					<div class="row">
						<div id="c0">
							<div class="col-sm-12">
								<input type="text" name="c_p0" required="required" size="30" id="c_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="c_c0" cols="28" rows="2" class="col-sm-12" id="c_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>				
					</div>		
							<button type="button" class="col-sm-12" id="button_c" onclick="c_duplicate()">Add More</button>
					<br><br>
								
					<h4>Monitor</h4>
					<div class="row">
						<div id="mo0">
							<div class="col-sm-12">
								<input type="text" name="mo_p0" required="required" size="30" id="mo_p0"
											placeholder="Price*">
							</div>
						
							<div class="col-sm-12">
								<textarea name="mo_c0" cols="28" rows="2" class="col-sm-12" id="mo_c0"
										placeholder="Config*" required="required"></textarea>
							</div>
						</div>						
					</div>
							<button type="button" class="col-sm-12" id="button_mo" onclick="mo_duplicate()">Add More</button>
					<br><br>
					
					<h4>Cost of this Computer</h4>
					<div class="row">
						<div id="co0">
							<div class="col-sm-12">
								<textarea name="tags" cols="28" rows="2" class="col-sm-12" id="tags"
										placeholder="Cost*" required="required"></textarea>
							</div>
						</div>						
					</div>
					<br>
					
					
					<h4>Pin</h4>
					<div class="row">
						<div id="pin0">
							<div class="col-sm-12">
								<input type="text" name="pin" required="required" size="30" id="pin"
											placeholder="Pin*">
							</div>
						</div>						
					</div>
					<br> 
					
							<div class="col-sm-12">
								<input type="submit" name="action" value="Save"
									class="btn btn-send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span class="loader1"></span><div class="loader2"></div><span class="loader3"></span>
							<div id="msg"></div>
							</div>					
										
				</div>
			  </form>
			</div>
		</div>
	</section>
	<!-- Desc -->
	
	
<br><br>





	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Follow us:</span> <a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a> <a href=""><i
						class="fa fa-google-plus"></i></a> <a href=""><i
						class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>
						&copy; 2016 <a href="">DevChakra</a>. All Rights Reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul>
			<li><a href="#header"><i class="fa fa-angle-up"></i></a></li>
		</ul>
	</div>


	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
	<!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="js/nav-collapse.js"></script>
	<!-- Nav Scripts -->
	<script type="text/javascript" src="js/ec.js"></script>
	<!-- Expand/Collapse -->


</body>
</html>