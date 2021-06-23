@extends('master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Civic - CV Resume</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style(2).css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->
	{{-- <header class="header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="site-logo">
						<h2><a href="#">Civic</a></h2>
						<p>Enhance your online presence</p>
					</div>
				</div>
				<div class="col-md-8 text-md-right header-buttons">
					<a href="#" class="site-btn">Download CV</a>
					<a href="#" class="site-btn">Discover me</a>
				</div>
			</div>
		</div>
	</header> --}}
	<!-- Header section end -->

	<!-- Hero section start -->
	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero-text">
								<h2></h2>
								<p>Name: {{ $user->name }}.</p>
							</div>
							<div class="hero-info">
								<h2>General Info</h2>
								<ul>
                  @if ($user->role = "1000")
                  <li><span>Matric No</span>{{ $user->matricNo }}</li>
                  @endif
									<li><span>Address</span>{{ $user->address }}</li>
									<li><span>E-mail</span>{{ $user->email }}</li>
                  <li><span>Phone </span>{{ $user->mobileNo }}</li>
                  @if ($user->role = "1000")
                  <li><span>Class </span>{{ $user->level }}</li>
                  @endif
                  <li><span>Role </span> 
                    @if ($user->role = "1000")
                      Student
                    
                    @else
                      Lecturer
                    
                    @endif
                  </li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								<img src="public\uploads\{{ $user->image }}" alt="5">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main (2).js"></script>
</body>
</html>
@stop

@section('title')
    landing Page
@stop
