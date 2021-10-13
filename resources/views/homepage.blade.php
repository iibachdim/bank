<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    	<!--
    	Boxer Template
    	http://www.templatemo.com/tm-446-boxer
    	-->
		<meta charset="utf-8">
		<title>Boxer - Software Landing Page</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/qnb-logo.png') }}" style="width: 100%; height: 100%">
                    </a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Home</a></li>
                        <li><a href="#login">Login</a></li>
						<li><a href="#feature">Features</a></li>
						<li><a href="#pricing">Pricing</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">BANK QNB</h1>
							<p class="tm-white">PT Bank QNB Indonesia Tbk merupakan bagian dari QNB Group,
                                bank terbesar di wilayah Timur Tengah dan Afrika. Berdiri pada 1964,
                                QNB Group beroperasi di 31 negara yang tersebar di tiga benua dengan menyediakan rangkaian lengkap produk dan layanan yang terdepan.
                                QNB Group mempertahankan posisinya sebagai salah satu bank regional dengan peringkat tertinggi dari lembaga pemeringkat kredit terkemuka
                                termasuk Standard & Poor’s (A), Moody’s (Aa3), dan Fitch Ratings (A+). QNB Group juga telah menerima banyak penghargaan dari media finansial
                                internasional terkemuka di dunia.</p>
							<img src="{{ asset('images/qnb-logo.png') }}" style="max-width: 30%; height: auto;">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start divider -->
		<section id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						{{-- <i class="fa fa-laptop"></i> --}}
						<h3 class="text-uppercase">Passion for excellence</h3>
						<p>Kami bertekad melampaui ekspektasi untuk mencapai standar profesi tertinggi</p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						{{-- <i class="fa fa-twitter"></i> --}}
						<h3 class="text-uppercase">Innovative</h3>
						<p>Kami beradaptasi terhadap perubahan dan mengapresiasi ide-ide kreatif agar dapat senantiasa mencapai hasil terbaik.</p>
					</div>
                    <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						{{-- <i class="fa fa-font"></i> --}}
						<h3 class="text-uppercase">Responsible Citizenship</h3>
						<p>Kami menjunjung tinggi dan peduli terhadap kesejahteraan masyarakat dan lingkungan di tempat kami bekerja.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->

        <!-- start login -->
        <section id="login">
			<div class="container" style="text-align: center;">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">JOIN Bersama Kami</h2>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Register</h4>
							</div>
							<ul>
							</ul>
                            <a href="{{ route('register') }}" class="btn btn-primary text-uppercase">Sign Up</a>
						</div>
					</div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4></h4>
							</div>
							<ul>
							</ul>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Login</h4>
							</div>
							<ul>
							</ul>
                            <a href="{{ route('login') }}" class="btn btn-primary text-uppercase">Sign IN</a>
						</div>
					</div>
                </div>
            </div>
        </section>
        <!-- end login -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Fitur Kami</h2>
						<p>Berikut adalah Fitur Baru QNB Online Banking</p>
						<p><span><i class="fa fa-mobile"></i></span>Registrasi Online</p>
						<p><i class="fa fa-code"></i>Kartu Kredit Bank QNB Indonesia</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="{{ asset('images/qnb-foto.jpg') }}" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">Our Pricing</h2>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Basic Plan</h4>
								<p>$11</p>
								<small class="text-lowercase">monthly</small>
							</div>
							<ul>
								<li>6 GB Space</li>
								<li>600 GB Bandwidth</li>
								<li>60 More Themes</li>
								<li>Lifetime Support</li>
							</ul>
							<button class="btn btn-primary text-uppercase">Sign up</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4>Business Plan</h4>
								<p>$22</p>
								<small class="text-lowercase">monthly</small>
							</div>
							<ul>
								<li>15 GB space</li>
								<li>1,500 GB Bandwidth</li>
								<li>150 More Themes</li>
								<li>Lifetime Support</li>
							</ul>
							<button class="btn btn-primary text-uppercase">Sign up</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Pro Plan</h4>
								<p>$33</p>
								<small class="text-lowercase">monthly</small>
							</div>
							<ul>
								<li>35 GB space</li>
								<li>3,500 GB bandwidth</li>
								<li>350 more themes</li>
								<li>Lifetime Support</li>
							</ul>
							<button class="btn btn-primary text-uppercase">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end pricing -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contact Us</h2>
							<p>QNB Bank Indonesia</p>
							<address>
								<p><i class="fa fa-map-marker"></i>36 Sudirman,  Jakarta, Indonesia</p>
								<p><i class="fa fa-phone"></i> 010-010-0110 or 020-020-0220</p>
								<p><i class="fa fa-envelope-o"></i> qnb@indonesia.com</p>
							</address>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2021 Bank QNB</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/wow.min.js') }}"></script>
		<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>
