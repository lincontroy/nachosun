<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	
	<!-- Title Tag  -->
    <title>{{env('APP_NAME')}} - Your number one cyber.</title>
	
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
	
	<!-- Jquery UI -->
    <link rel="stylesheet" href="css/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Cubeportfolio CSS -->
	<link rel="stylesheet" href="css/cubeportfolio.min.css"> 
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="css/flex-slider.min.css"> 
	<!-- Fancy Box CSS -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Nice Select UI -->
    <link rel="stylesheet" href="css/nice-select.css">
	
	<!-- Techopz CSS -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- Techopz Skins -->
	<link rel="stylesheet" href="css/skins/skin1.css">
	
	<link rel="stylesheet" href="#" id="techopz_custom">	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preeloader">
		<div class="preloader-spinner"></div>
	</div>
	<!-- End Preloader -->
	
	<!-- Techopz Options -->
	<div class="techopz-options">
		<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
		<div class="single-option">
			<h4>{{env('APP_NAME')}}</h4>
			<p>Here is some awesome color's available </p>
			<span class="skin1"></span>
			<span class="skin2"></span>
			<span class="skin3"></span>
			<span class="skin4"></span>
		</div>
	</div>
	<!--/ End Techopz Options -->
	
	<!-- Header -->
	<header class="header">
		
		
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href=""><img src="logo.png" alt="logo" width="100" height="100"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-9 col-md-10 col-12">
						<div class="menu-area">
							<!-- Main Menu -->
							<nav class="navbar navbar-expand-lg">
								<div class="navbar-collapse">	
									<div class="nav-inner">	
										<ul class="nav main-menu menu navbar-nav">
											<li class="active"><a href="">Home</a>
												
											</li>
                                            <li class="active"><a href="/#about">About</a>
												
											</li>		
											<li><a href="/#services">Services</a>
												
											</li>	
											
											<li><a href="/#contact">Contact Us</a></li>					
										</ul>
									</div>
									<div class="right-bar">
										
									</div>
								</div>
							</nav>
							<!--/ End Main Menu -->	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
		
		<!-- Sidebar Popup -->
		<div class="sidebar-popup">
			<div class="cross">
				<a class="btn"><i class="ti-close"></i></a>
			</div>
			<div class="logo">
				<a href="index-2.html"><img src="images/logo.png" alt="Logo"></a>
			</div>
			<div class="single-content">
				<h4>About Us</h4>
				
			</div>
			<div class="single-content">
				<h4>Quick Links</h4>
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About Us</a></li>
					<li><a href="/#services">Services</a></li>
					
					<li><a href="/#contact">Contact Us</a></li>
				</ul>
			</div>	
			
		</div>
		<!--/ Sidebar Popup -->	
	</header>
	<!--/ End Header -->
	
	@yield('content')


    <style>
.whatsapp-icon {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background-color: #25D366;
    color: white;
    border-radius: 50%; /* Makes it a circle */
    padding: 15px;
    font-size: 30px;
    box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60px; /* Width and height should be equal to maintain the circle */
    height: 60px;
    transition: background-color 0.3s ease;
}

.whatsapp-icon:hover {
    background-color: #128C7E;
}

.whatsapp-icon i {
    color: white;
}
</style>

<!-- Include Font Awesome CDN (if not already included) -->


    <a href="https://wa.me/254796829262" class="whatsapp-icon" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>
	
	<!-- Start Footer Area -->
	<footer class="footer">
		
		<!-- Copyright -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright-content">
							<p><a href="">{{env('APP_NAME')}}</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Copyright -->
	</footer>
	<!--/ End Footer Area -->
 
	<!-- Jquery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Jquery UI JS -->
	<script src="js/jquery-ui.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Steller JS -->
	<script src="js/steller.js"></script>
	<!-- Jquery FancyBox JS -->
	<script src="js/jquery-fancybox.min.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.min.html"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="js/jquery-counterup.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- Final Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Circle Progress JS -->
	<script src="js/circle-progress.min.js"></script>
	<!-- Cubeportfolio JS -->
	<script src="js/cube-portfolio.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Techopz Options JS -->
	<script src="js/techopz-options.js"></script>
	<!-- Google Map JS -->
	<script src="js/gmaps.min.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>

</html>