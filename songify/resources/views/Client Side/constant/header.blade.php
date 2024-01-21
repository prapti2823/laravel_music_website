<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SolMusic | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href='Client/css/bootstrap.min.css'/>
	<link rel="stylesheet" href='Client/css/font-awesome.min.css'/>
	<link rel="stylesheet" href='Client/css/owl.carousel.min.css'/>
	<link rel="stylesheet" href='Client/css/slicknav.min.css'/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href='Client/css/style.css'/>


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

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="/" class="site-logo">
			<img src="Client/img/logo.png" alt="">
		</a>
		<div class="header-right">
			{{-- <a href="#" class="hr-btn">Help</a>
			<span>|</span> --}}
			<div class="user-panel">
				<a href="/loginPage" class="login">Login</a>
				<span>|</span>
				<a href="/register" class="register">Create an account</a>
			</div> 
		</div>
		<ul class="main-menu">
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="#">Pages</a>
				<ul class="sub-menu">
					{{-- <li><a href="/category">Category</a></li> --}}
					<li><a href="/playlist">Playlist</a></li>
					<li><a href="/artist">Artist</a></li>
					{{-- <li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li> --}}
				</ul>
			</li>
			<li><a href="blog.html">News</a></li>
			<li><a href="/feedback">Contact</a></li>
		</ul>
	</header>
	<!-- Header section end -->
