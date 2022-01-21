<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Wedding Invitation</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,700&display=swap" rel="stylesheet">

	<style type="text/css">
		.preloader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			Z-index: 10001;
			background-color: #fff;

		}

		.loader .load {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			font: 100% arial;
			text-align: center;
			font-family: 'Philosopher', sans-serif;
			font-size: 30px;

		}

		.loader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			Z-index: 10000;
			background-color: #fff;

		}

		.preloader .loading {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			font: 100% arial;
			text-align: center;
			font-family: 'Philosopher', sans-serif;
			font-size: 30px;

		}

		#timer {
			display: flex;
			align-items: center;
			justify-content: center;

		}

		#time {
			font-size: 150%;
			color: #45678E;

		}
	</style>
</head>

<body>
	<div class="preloader" id="preloader">
		<div class="loading">
			<img src="assets/img/preload.gif" width="100%" alt="Sedang Memuat...">
			<p>Feisal & Fayza</p>
		</div>
	</div>

	<div class="loader" id="loader">
		<div class="load">
			<img src="assets/img/daunatas.png" width="100%" alt=""><br><br>
			<button class="btn btn-default" onclick="playAudio() " id="play">Buka Undangan</button><br><br>
			<img src="assets/img/daunbawah.png" width="100%" alt="">
		</div>
	</div>

	<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand">Wedding Invitation</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right text-uppercase">
					<li><a href="#feature">Greeting</a></li>
					<li><a href="#divider">Time</a></li>
					<li><a href="#contact">Location</a></li>
					<!-- <li><a href="#contact">Kontak</a></li> -->
				</ul>
			</div>
		</div>
	</nav>



	<section id="home" style="background-image: url('assets/img/wall.png');">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 wow fadeIn " data-wow-delay="0.3s">
						<h1 class="text-upper"></h1>

						<img src="assets/img/greets.png" style=" width: 70%;
  
  
  max-width: 50vw;" class="img-responsive img-rounded wow fadeInUp" data-wow-delay="0.7s" alt="greets">
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="feature">
		<div class="container">
			<div class="row text-justify">
				<div class="col-md-6 wow fadeInUp text-center" data-wow-delay="0.6s">
					<img src="assets/img/weeding.png" width="80%" class="img-responsive img-rounded" alt="feature img">
				</div>
				<div class="col-md-6 wow fadeInUp text-center" data-wow-delay="0.6s">
					<h2 class="text-uppercase">Mempelai</h2>
					<p>Maha suci Allah yang telah menciptakan mahkluk-Nya berpasang pasangan. Ya Allah yang Maha Pengasih, dengan ridho-Mu Kau mempertemukan kami dalam suatu ikatan pernikahan suci</p>
					<p> <b>Kami yang berbahagia</b> </p>
					<img src="assets/img/nama.png" alt="" width="60%">
				</div>
			</div>
		</div>
	</section>

	<section id="divider">
		<div class="container">

			<hr>

			<h2 id="titletime" class="wow fadeInDown " data-wow-delay="0.3s">Waktu sebelum akad</h2>
			<div class="row my-5 wow fadeInDown" id="timer" data-wow-delay="0.4s">
				<div id="time"></div>
			</div>
			<hr>
			<br>
			<h1 class=" wow fadeInDown templatemo-box" data-wow-delay="0.5s">Akad Nikah</h1>
			<hr>

			<div class="row">
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.4s">
					<i class="fa fa-calendar"></i>
					<h3 class="text-uppercase">Tanggal</h3>
					<p>Sabtu, 5 Februari 2022 </p>
				</div>
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
					<i class="fa fa-history"></i>
					<h3 class="text-uppercase">Waktu</h3>
					<p>Pukul 07.00 WIB s/d Selesai </p>
				</div>
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
					<i class="fa fa-location-arrow"></i>
					<h3 class="text-uppercase">Lokasi</h3>
					<p>Perum Rajeg Mas Pratama Blok C1 No 08 RT. 03/06, Kelurahan Sukatani Kec. Rajeg Kab. Tangerang</p>
				</div>
			</div>
			<hr>
		</div>
	</section>

	<section id="divider">
		<div class="container">
			<h1 class=" wow fadeInDown templatemo-box" data-wow-delay="0.3s">Resepsi</h1>
			<hr>
			<div class="row">
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
					<i class="fa fa-calendar"></i>
					<h3 class="text-uppercase">Tanggal</h3>
					<p>Sabtu, 5 Februari 2022 </p>
				</div>
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
					<i class="fa fa-history"></i>
					<h3 class="text-uppercase">Waktu</h3>
					<p>Pukul 10.00 WIB s/d Selesai </p>
				</div>
				<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
					<i class="fa fa-location-arrow"></i>
					<h3 class="text-uppercase">Lokasi</h3>
					<p>Perum Rajeg Mas Pratama Blok C1 No 08 RT. 03/06, Kelurahan Sukatani Kec. Rajeg Kab. Tangerang</p>
				</div>
				<br>

			</div>



			<div class="my-3">
				<hr>
				<hr>
				<p class="text-center">


					Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
					<br>
					<hr>
					QS. Ar-Rum: 21

				</p>
			</div>
		</div>

	</section>
	<section id="contact" style="background-image: url('assets/img/wall.png');">
		<div class="text-center kontak">
			<div class="container">
				<div class="col-md-12">

					<p class="lead wow fadeInUp">
					<h1>Lokasi</h1><br>
					<hr>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6736.075994932169!2d106.51412214339128!3d-6.141357763767291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b1ac31ebe333cd1!2zNsKwMDgnMzAuNCJTIDEwNsKwMzAnNTYuNCJF!5e0!3m2!1sid!2sid!4v1642564434903!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="shadow"></iframe><br>
					<a class="btn btn-default" href="https://goo.gl/maps/z86xYRrZH3BiA4Qo9" target="_blank">Buka Peta</a>
					</p>

				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Kontak kami</h2>
						<p> </p>
						<address>
							<p><i class="fa fa-map-marker"></i>Pasarkemis</p>
							<p><i class="fa fa-phone"></i> +6289652481625</p>
							<p><i class="fa fa-envelope-o"></i> almalikstore@gmail.com</p>
						</address>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Sosial Media</h2>
						<p> </p>
						<address>
							<p><i class="fa fa-facebook"></i><a href="">Al-malik bookstore</a></p>
							<p><i class="fa fa-instagram"></i> <a href="">Al-malik bookstore </a> </p>
							<p><i class="fa fa-twitter"></i> <a href="">Al-malik bookstore</a> </p>
						</address>
					</div> -->
				</div>
			</div>
		</div>
		<audio controls loop id="myAudio">

			<source src="assets/music/music.mp3" type="audio/mpeg">

		</audio>

		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © <script>
							document.write(new Date().getFullYear());
						</script> Isnan MS & Budimanium</p>
				</div>
			</div>
		</footer>
	</section>


	<script>
		var load = document.getElementById('preloader');
		window.addEventListener('load', function() {
			setTimeout(function() {
				load.style.display = 'none';
			}, 400);

		});

		var x = document.getElementById("myAudio");
		var y = document.getElementById("loader");
		var z = document.getElementById("play");


		z.addEventListener("click", open);

		function open() {

			y.style.display = 'none';


		}





		function playAudio() {
			x.play();
		}
	</script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/timer.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.singlePageNav.min.js"></script>
	<script>
		$(window).load(function() {
			$('.preloader').fadeOut(1000);
		});

		$(function() {
			new WOW().init();
			$('.templatemo-nav').singlePageNav({
				offset: 70
			});

			$('.navbar-collapse a').click(function() {
				$(".navbar-collapse").collapse('hide');
			});
		})
	</script>
</body>

</html>