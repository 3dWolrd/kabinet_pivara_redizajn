<!DOCTYPE html>
<html lang="sl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<title>Kabinet pivara</title>
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
	<!-- >Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Noto+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
	<!-- >Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Animate on scroll  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<!-- Slick Slider CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- Outdated CSS -->
	<link href="assets/stylesheets/vendor/outdatedbrowser.css" rel="stylesheet">
	<!-- Main CSS -->
	<link href="assets/stylesheets/main.css" rel="stylesheet">
</head>

<body>
	<div class="modal fade" id="modal18">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
			<h3 class="title animated fadeInUp" style="animation-delay: 0.2s;">
				Da li imate preko <br>18 godina?
			</h3>
			<div class="animated fadeInUp" style="animation-delay: 0.4s;">
		         <button class="button button-black" data-dismiss="modal">
			        DA
		        </button>
		        <button class="button button-black" data-dismiss="modal">
			        NE
		        </button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<header class="header">
		<nav>
			<a href="index.php" class="header__logo">
				<img src="assets/images/logo.jpg" alt="logo">
			</a>
			<div class="header__btns">
				<a href="#" class="header__basket">
					<?php include 'assets/images/icon-basket.svg'?>
					<span>5</span>
				</a>
				<a href="#" class="header__bars">
					<span class="header__bars__closed">
						<?php include 'assets/images/icon-bars.svg'?>
					</span>
					<span class="header__bars__active">
						<?php include 'assets/images/icon-close.svg'?>
					</span>
				</a>
			</div>
			<ul class="header__social animated fadeInUp" style="animation-delay: 1s;">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
			<div class="navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-6 animated fadeInUp">
							<ul class="navigation__languages">
								<li class="active"><a href="#">SR</a></li>
								<li><a href="#">EN</a></li>
								<li><a href="#">DE</a></li>
							</ul>
							<ul class="navigation__menu">
								<li><a href="#">O NAMA</a></li>
								<li><a href="#">ODRŽIVOST</a></li>
								<li><a href="#">ISKUSTVO</a></li>
								<li><a href="#">PRODAVNICA</a></li>
								<li><a href="#">KONTAKT</a></li>
							</ul>
						</div>
						<div class="col-md-6 animated fadeInUp" style="animation-delay: 0.5s;">
							<h4 class="small-title">NAŠA PIVA</h4>
							<ul class="navigation__types">
								<li><a href="#">Citra</a></li>
								<li><a href="#">Bastardo</a></li>
								<li><a href="#">Cascade</a></li>
								<li><a href="#">Ritoznojčan</a></li>
								<li><a href="#">Bad Copy</a></li>
								<li><a href="#">Wheat me up</a></li>
								<li><a href="#">Wheat me up</a></li>
								<li><a href="#">Maćedo I</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<main class="main">
		<section class="home" style="background-image: url('assets/images/home.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h3 class="small-title home-small-title" data-aos="fade-up" data-aos-duration="1400">NAŠA PRIČA</h3>
						<h2 data-aos="fade-up" data-aos-duration="1400" data-aos-delay="500" class="home-title">Kabinet pivara je prva zanatska grinfild pivara na Balkanu.</h2>
						<a href="#explore" class="anchor-link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
							<img src="assets/images/icon-explore.svg" alt="explore"> Explore
						</a>
					</div>
				</div>
			</div>
		</section>
		<div id="explore" class="anchor-target"></div>
		<section class="explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2" data-aos="fade-up" data-aos-duration="1000">
						<h1 class="title">Istražite našu prodavnicu</h1>
						<p>Maecenas nec viverra justo. Phasellus malesuada nibh sed tellus molestie, non placerat nunc condimentum. Suspendisse volutpat vel augue eget finibus. Ut faucibus aliquet efficitur. Proin tellus lorem, egestas id aliquam vulputate, pretium et nisl. Sed lobortis viverra varius. Nullam efficitur auctor ligula.</p>
					</div>
				</div>
			</div>
			<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
				<div class="row explore__slider">
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/citra.png" alt="Sauvignon" class="img-fluid"></figure>
							<h2>Citra - penzija</h2>
							<p>250 RSD</p>
						</a>
					</div>
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/cascade.png" alt="Rumeni Muškat" class="img-fluid"></figure>
							<h2>Cascade - penzija</h2>
							<p>280 RSD</p>
						</a>
					</div>
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/bastardo.png" alt="Ritoznojčan" class="img-fluid"></figure>
							<h2>Bastardo - Svetsko prvenstvo u fudbalu- specijal</h2>
							<p>220 RSD</p>
						</a>
					</div>
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/badcopy.png" alt="Laški Rizling" class="img-fluid"></figure>
							<h2>Bad Copy - specijal</h2>
							<p>300 RSD</p>
						</a>
					</div>
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/1.png" alt="MARKUS Renski rizling / Riesling" class="img-fluid"></figure>
							<h2>Wheat me up</h2>
							<p>250 RSD</p>
						</a>
					</div>
					<div class="col">
						<a href="#">
							<figure><img src="assets/images/macedo.png" alt="MARKUS Modri pinot / Pinot Noir" class="img-fluid"></figure>
							<h2>Maćedo I - MTV Adria specijal</h2>
							<p>320 RSD</p>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="lrs-wrapper">
			<div class="container-fluid">
				<div class="row lrs lrs__left">
					<div class="col-lg-6 order-lg-6 lrs__img">
						<figure data-aos="custom">
							<img src="assets/images/lr1.jpg" alt="lr" class="img-fluid">
						</figure>
					</div>
					<div class="col-lg-6 lrs__txt">
						<article>
							<h3 class="small-title">ODRŽIVOST</h3>
							<h2 class="title">Jedinstveni sastojci</h2>
							<p>Maecenas nec viverra justo. Phasellus malesuada nibh sed tellus molestie, non placerat nunc condimentum. Suspendisse volutpat vel augue eget finibus. Ut faucibus aliquet efficitur. Proin tellus lorem, egestas id aliquam vulputate, pretium et nisl. Sed lobortis viverra varius. Nullam efficitur auctor ligula.</p>
							<a href="#" class="button">
								VIŠE <?php include 'assets/images/icon-arrows.svg'?>
							</a>
						</article>
					</div>
				</div>
				<div class="row lrs lrs__right">
					<div class="col-lg-6 lrs__img">
						<figure data-aos="custom">
							<img src="assets/images/lr2.jpg" alt="lr" class="img-fluid">
						</figure>
					</div>
					<div class="col-lg-6 lrs__txt">
						<article>
							<h3 class="small-title">ISKUSTVO</h3>
							<h2 class="title">Stravstveni pristup</h2>
							<p>Maecenas nec viverra justo. Phasellus malesuada nibh sed tellus molestie, non placerat nunc condimentum. Suspendisse volutpat vel augue eget finibus. Ut faucibus aliquet efficitur. Proin tellus lorem, egestas id aliquam vulputate, pretium et nisl. Sed lobortis viverra varius. Nullam efficitur auctor ligula.</p>
							<a href="#" class="button">
								VIŠE <?php include 'assets/images/icon-arrows.svg'?>
							</a>
						</article>
					</div>
				</div>
				<div class="row lrs lrs__left">
					<div class="col-lg-6 order-lg-6 lrs__img">
						<figure data-aos="custom">
							<img src="assets/images/lr3.jpg" alt="lr" class="img-fluid">
						</figure>
					</div>
					<div class="col-lg-6 lrs__txt">
						<article>
							<h3 class="small-title">KVALITETA</h3>
							<h2 class="title">Savršentsvo u 3 koraka</h2>
							<p>Maecenas nec viverra justo. Phasellus malesuada nibh sed tellus molestie, non placerat nunc condimentum. Suspendisse volutpat vel augue eget finibus. Ut faucibus aliquet efficitur. Proin tellus lorem, egestas id aliquam vulputate, pretium et nisl. Sed lobortis viverra varius. Nullam efficitur auctor ligula.</p>
							<a href="#" class="button">
								VIŠE <?php include 'assets/images/icon-arrows.svg'?>
							</a>
						</article>
					</div>
				</div>
			</div>
		</section>
		<section class="book parallax" style="background-image:url('assets/images/book.jpg')">
			<div class="container">
				<div class="row">
					<div class="col">
						<article data-aos="fade-up" data-aos-duration="1000">
							<h2 class="title">
							Rezervišite <br>datum degustacije
							</h2>
							<p>Maecenas nec viverra justo. Phasellus malesuada nibh sed tellus molestie, non placerat nunc condimentum.</p>
							<a href="#" class="button">
								Kontaktirajte nas <?php include 'assets/images/icon-arrows.svg'?>
							</a>
						</article>
					</div>
				</div>
			</div>
		</section>
		<section class="awards">
			<div class="container">
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col">
						<h2 class="title">Nagrade i prizanja</h2>
					</div>
				</div>
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-md-4">
						<h3>Pactivity- Grand prix for the best packaging in Serbia 2014/2015</h3>
						<h3>Regpak- the best series of the labels in the region 2016</h3>
						<h3>Serbian Chamber of Commerce- The best of Serbia- for the most successful start up  in 2016</h3>
					</div>
					<div class="col-md-4">
						<h3>Ernst & Young- Best Entrepreneur of the Year- nominee 2016</h3>
						<h3>Ratebeer- Best beer in Serbia 2014</h3>
						<h3>Ratebeer- Best beer in Serbia 2016, Best brewer in Serbia & Best brewery in Serbia</h3>
					</div>
					<div class="col-md-4">
						<h3>Ratebeer- Best beer in Serbia 2017</h3>
						<h3>Ratebeer- Best beer in Serbia 2018</h3>
					</div>
				</div>
			</div>
		</section>
		<section class="newsletter">
			<div class="container" data-aos="fade-up" data-aos-duration="1000">
				<div class="row">
					<div class="col">
						<h2 class="title">BILTEN</h2>
					</div>
				</div>
				<form action="#" class="form-default">
					<div class="row">
						<div class="col-md-3">
							<input type="email" placeholder="E-mail" required>
						</div>
						<div class="col-md-3">
							<input type="text" placeholder="Ime" required>
						</div>
						<div class="col-md-3">
							<input type="text" placeholder="Prezime" required>
						</div>
						<div class="col-md-3">
							<button type="submit" class="button button-black">Registracija</button>
						</div>
						<div class="col">
							<label class="label-check">
								<input type="checkbox"><span></span> Slažem se sa obradom mojih ličnih podataka u svrhe e-marketinga.
							</label>
						</div>
					</div>
				</form>
			</div>
		</section>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000">
				<div class="col-md-2">
					<a href="index.php" class="footer__logo"><img src="assets/images/logo.jpg" alt="logo"></a>
				</div>
				<div class="col-md-4">
					<h4>NASLOV</h4>
					<ul>
						<li><b>Kabinet d.o.o.</b></li>
						<li>Despota Stevana Lazarevića 11.</li>
						<li>11450 Nemenikuće, Sopot</li>
						<li>Srbija</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>KONTAKT</h4>
					<ul>
						<li><b>Tel:</b>+381 11 242 44 78</li>
						<li><b>E-mail</b> <a href="#">kabinet@kabinet.rs</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>PRATITE NAS</h4>
					<div class="footer__social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tripadvisor"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="row footer__copyright">
				<div class="col-md-2"></div>
				<div class="col-md-3 order-md-9">
				</div>
				<div class="col-md-7">
					<p>&copy; Kabinet pivara. Sva prava zadržana 2019. |  Dizajn: Neven Čulum</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Outdated browser -->
	<div id="outdated"></div>
	<!-- jQuery JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- AOS JS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Slick Slider JS -->
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- Outdated JS -->
	<script src="assets/javascripts/vendor/outdatedbrowser/outdatedbrowser.js"></script>
	<!-- Main JS -->
	<script src="assets/javascripts/main.js"></script>
</body>

</html>
