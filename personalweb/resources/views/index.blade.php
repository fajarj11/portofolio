@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico" />
	<title>Home</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./gambar/profil.png');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Welcome To My Blog</h1>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">About Me</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-12">
					<h4>My name is Fajar Julianto, I am a student at SMK Taruna Bhakti.</h4>
					<h4>I'm from RPL (Software Engineering).</h4>
					<br>
					<h2>My Data :</h2>
					<ul>
						<li>Name : Fajar julianto</li>
						<li>Date of birth : 11 July 2002</li>
						<li>Citizenship : Indonesia</li>
						<li>Religion : Islam</li>
						<li>School : Taruna Bhakti Vocational High School</li>
						<li>Majors : Software Engineering</li>
						<li>Status : Student</li>
						<li>Address : Asrama Divif 1 Kostrad Rt 02, Rw 03. Cilodong Depok</li>
					</ul>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="gallery" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Gallery</h2>
				</div>
				<!-- /Section header -->

				<!-- gallery -->
				
				<div class="col-md-12">
				@foreach($gallery as $g)
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="{{ url('gallery/'.$g->file) }}" alt="">
						<div class="overlay"></div>
						<div class="work-content">
						<ul class="work-link">
								<li><i class="fa fa-user"></i> {{$g->author}}</li>
							</ul>
						<h3>{{$g->deskripsi}}</h3>
						<div class="work-link">
							<a class="lightbox" href="{{ url('gallery/'.$g->file) }}"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
	
				<!-- /gallery -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Article</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-12">
        		@foreach($blog as $data)
					<div class="blog col-md-3" style="margin-left: 85px;">
						<div class="blog-img">
            			<img src="{{ url('gambar/'.$data->file) }}" style="padding: 15px; width: 255px; height: 200px;">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>{{$data->author}}</li>
							</ul>
							<h3>{{$data->judul}}</h3>
              				<p>{!! str_limit($data->content, 30) !!}</p>
							<a href="{{route('blog.isi', $data->id)}}">Read more</a>
						</div>
					</div>
          		@endforeach
				</div>
				<!-- /blog -->
				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">My Contact</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>+62 8952 7131 418</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>fajarj630@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Asrama Divif 1 Kostrad Rt 02, Rw 03. Cilodong Depok</p>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.instagram.com/f_julianto11/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCK3wsc9Z4YBROCcrOmvC8kA?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Ini supaya tidak bisa klik kanan -->
	<!-- <script language="javascript">
		var message = "function disabled";
			function rtclickcheck(keyp){if (navigator.appName == "Netscape" && keyp.which == 3){alert("Sorry..."); return false; }
			if (navigator.appVersion.indexOf("MSIE") != -1 && event.button ==2){alert("Sorry..."); return false;}
		} document.onmousedown = rtclickcheck;
	</script> -->

</body>

</html>
@endsection