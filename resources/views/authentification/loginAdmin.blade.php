<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Connexion admin</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="{{asset('membre/css/style.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{asset('membre/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>

@extends('front.layout.front')

@section ('contentPage')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="#"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <!-- Header Section Begin -->
    <header class="header">
        <x-menu_navigation />
    </header>
    <!-- Header Section End -->

       
	<div class="main-bg">
		<!-- title -->
		<h1>Connexion admin</h1>
		<!-- //title -->
		<!-- content -->
         <br> <br> <br>
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
                <a href="#"><img src="{{asset('membre/images/user.png')}}" width="200" alt="" /></a>
				</div>
				<form action="#" method="post">
					<p class="legend">Se connecter ici<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-lock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
			</div>
		</div>
		<!-- //content -->
		
	</div>
    <!-- Footer Section Begin -->
<footer class="footer">
<x-footer />
    
</footer>
<!-- Footer Section End -->


@endsection
</body>

</html>