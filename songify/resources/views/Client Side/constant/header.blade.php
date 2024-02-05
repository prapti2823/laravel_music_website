<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SolMusic</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
<!-- Use default jPlayer skin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/skin/blue.monday/jplayer.blue.monday.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/skin/blue.monday/jplayer.blue.monday.min.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="user-panel">
            @if(session()->has('userid'))
                <div>
                    <a href="/" class="register">{{session()->get('fullname')}}</a>
                    <a href="/" class="register">
                        <img src={{asset('uploads/'.session()->get('photo'))}} class="rounded-circle" height="30" width="30"/>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="/logout">Logout</a></li>
						<li><a href="/adminlogin">Admin Panel</a></li>
                    </ul>
                </div>
            @else
                <a href="/loginPage" class="login">Login</a>
                <span>|</span>
                <a href="/register" class="register">Create an account</a>
            @endif
        </div>
    </div>
		<ul class="main-menu">
		@if(session()->has('userid'))
			<li><a href="/">Home</a></li>
			<li><a href="/playlist">Playlist</a></li>
			<li><a href="#">Pages</a>
				<ul class="sub-menu">
					{{-- <li><a href="/category">Category</a></li> --}}
					{{-- <li><a href="/playlist">Playlist</a></li> --}}
					<li><a href="/artist">Artist</a></li>
					<li><a href="/songs">Songs</a></li>
					{{--<li><a href="contact.html">Contact</a></li> --}}
				</ul>
			</li>
			{{-- <li><a href="blog.html">News</a></li> --}}
			<li><a href="/feedback">Contact</a></li>
		@else 
			<script>
				window.href="/";
			</script>
		@endif
		</ul>
	</header>
	<!-- Header section end -->