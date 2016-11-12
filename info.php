<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html lang="en">
<head>
<meta content="#fff" name="theme-color">
<meta content="#fff" name="msapplication-navbutton-color">
<meta content="#fff" name="apple-mobile-web-app-status-bar-style">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>DA-info</title>

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
		                <script type='text/javascript'>
		                var tot=0;
						 function handleClick(cb) {	
							                         if(cb.checked == true){
														 var arr = cb.value;					                         
														 tot = Number(tot) + Number(arr);
														 document.getElementById('total').value = tot;
							                         }
							                         else{
							                        	 var arr = cb.value;					                         
														 tot = Number(tot) - Number(arr);
														 document.getElementById('total').value = tot;
								                         }
												  }
                        </script>
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
	<header id="header" class="nav-down">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><st
							style="font-weight: 600; font-size: medium;">DevChakra</st>
						<!--<img src="images/logo.png" alt="">--></a>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->

	<!--  OTHER SUPPORT -->
	<section id="services">
		<div class="container">
			<div class="row">
			   <form id="idForm" action="php/ajax-search.php" class=""
						name="contact-form" method="post" enctype="multipart/form-data">
				<div class="col-md-12">
					<div class="section-title">
				        <div class="mast">
				            <h1>Search info about your computer</h1> 
							    <div class="input-group">
							      <input type="text" name="data" class="form-control" placeholder="Search for...">
							      <span class="input-group-btn">
							        <button class="btn btn-default" name="action" type="submit">Go!</button>
							      </span>
							    </div><!-- /input-group -->
				        </div>
					</div>
				</div>
			  </form>
			</div>

		</div>
	</section>
	<!-- /OTHER SUPPORT -->
	

	<!-- Config -->
	<section id="config">
<!-- 		<div class="container">
			<div class="row">
			  <div class="comp_spec col-md-12">
				<div class="col-md-8"><h3>Components</h3></div>
			  </div>			
			</div>
		</div> -->
		<div class="container">
			<div class="row">
				<div id="msg"></div>
			</div>
		</div>
		<div class="container">	
						
		</div>
	</section> 
<!-- 			<div class="row-static">
				  <h4>Total : <input readonly type="text" name="total" id="total"/></h4>		
			</div> -->

<br><br><br>
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
	<!-- Scripts 
	<script type="text/javascript" src="js/nav-collapse.js"></script>
	<!-- Nav Scripts -->
	<script type="text/javascript" src="js/ec.js"></script>
	<!-- Expand/Collapse -->
	<script type="text/javascript" src="js/hideHeader.js"></script>
	<!-- Hide Header -->	


</body>
</html>