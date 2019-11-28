<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dmiqa perfume</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dmiqa perfume">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
	<link href="<?= base_url('assets/depan/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/depan/') ?>dmiqa.ico">
</head>

<body>

	<!-- menu -->

	<div class="menu">

		<!-- search -->
		<div class="menu_search">
			<form action="#" id="menu_search_form" class="menu_search_form">
				<input type="text" class="search_input" placeholder="Search Item" required="required">
				<button class="menu_search_button"><img src="<?= base_url('assets/depan/') ?>images/search.png" alt=""></button>
			</form>
		</div>
		<!-- navigation -->
		<div class="menu_nav">
			<ul>
				<li><a href="<?= base_url('category') ?>">Category</a></li>
				<li><a href="<?= base_url('member') ?>">Membership </a></li>
				<li><a href="<?= base_url('howto') ?>">how to order</a></li>
				<li><a href="<?= base_url('login') ?>">Login</a></li>
			</ul>
		</div>
		<!-- contact information -->
		<div class="menu_contact">
			<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
				<div>
					<div><img src="<?= base_url('assets/depan/') ?>images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
				</div>
				<div>0812-6910-6688</div>
			</div>
			<div class="menu_social">
				<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="super_container">

		<!-- header -->

		<header class="header">
			<div class="header_overlay"></div>
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo">
					<a href="index.html">
						<div class="d-flex flex-row align-items-center justify-content-start">
							<div><img src="<?= base_url('assets/depan/') ?>images/round.png" alt=""></div>
							<div>DMIQA PARFUM</div>
						</div>
					</a>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="<?= base_url('category') ?>">Category</a></li>
						<li><a href="<?= base_url('member') ?>">Membership</a></li>
						<li><a href="<?= base_url('howto') ?>">Tutorial</a></li>
						<li><a href="<?= base_url('auth') ?>">Login</a></li>
					</ul>
				</nav>
				<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
					<!-- Search -->
					<div class="header_search">
						<form action="#" id="header_search_form">
							<input type="text" class="search_input" placeholder="Cari Produk.." required="required">
							<button class="header_search_button"><img src="<?= base_url('assets/depan/') ?>images/search.png" alt=""></button>
						</form>
					</div>
					<div class="cart">
						<a href="cart.html">
							<div>
								<img src="<?= base_url('assets/depan/') ?>images/jadi.png" alt="">
								<div>
									0
								</div>
							</div>
						</a>
					</div>
					<!-- Phone -->
					<div class="header_phone d-flex flex-row align-items-center justify-content-start">
						<div>
							<div><img src="<?= base_url('assets/depan/') ?>images/phone.png" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div>0812-6910-6688</div>
					</div>
				</div>
			</div>
		</header>

		<div class="super_container_inner">
			<div class="super_overlay"></div>

			<!-- home -->

			<div class="home">
				<!-- home slider -->
				<div class="home_slider_container">
					<div class="owl-carousel owl-theme home_slider">

						<!-- slide 1-->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?= base_url('assets/depan/') ?>images/ijo2.jpg);"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">Our Office</div>
												<div class="home_subtitle">We are open | 07:00 am</div>
												<div class="home_items">
													<div class="row">
														<div class="col-sm-3 offset-lg-1">
															<div class="home_item_side"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- slide 2-->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?= base_url('assets/depan/') ?>images/ijo3.jpg)"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">Enjoy with</div>
												<div class="home_subtitle">Our ustomer service</div>
												<div class="home_items">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- slide 3-->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?= base_url('assets/depan/') ?>images/ijo.jpg)"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">No limits</div>
												<div class="home_subtitle">To visit our office</div>
												<div class="home_items">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
					<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
				</div>
			</div>


			<!-- visi&misi -->

			<section class="visimisi" id="visimisi">
				<div class="container">

					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center">Visi & misi</h2>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<p class="kesatuan">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Assumenda dolorum optio magnam ratione exercitationem quidem repudiandae veniam debitis neque,
								commodi molestias saepe hic blanditiis nesciunt eaque ullam eligendi qui. Ullam.
							</p>
						</div>
						<div class="col-sm-6">
							<p class="kesatuan">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Assumenda dolorum optio magnam ratione exercitationem quidem repudiandae veniam debitis neque,
								commodi molestias saepe hic blanditiis nesciunt eaque ullam eligendi qui. Ullam.
							</p>
						</div>
					</div>
				</div>
			</section>

			<!--  akhir visi&misi -->


			<!-- portfolio -->

			<section class="portfolio" id="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center">Portfolio</h2>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p1.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p1.png" alt="" class="imggallery">
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p2.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p2.png" alt="" class="imggallery">
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p1.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p1.png" alt="" class="imggallery">
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p2.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p2.png" alt="" class="imggallery">
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p1.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p1.png" alt="" class="imggallery">
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?= base_url('assets/depan/') ?>images/p2.png" class="thumbnail" data-toggle="lightbox" data-gallery="gallery">
								<img src="<?= base_url('assets/depan/') ?>images/p2.png" alt="" class="imggallery">
							</a>
						</div>
					</div>
				</div>
			</section>

			<!-- akhir portfolio -->


			<!-- contact & lokasi -->

			<section class="contact" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center">Toko kami</h2>
						</div>
					</div>

					<div class="row">
						<!--Section: Contact v.1-->
						<section class="section pb-5">

							<!--Section heading-->
							<h2 class="section-heading h1 pt-4"></h2>
							<!--Section description-->
							<p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
								amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a
								pariatur accusamus veniam.</p>

							<div class="row">

								<!--Grid column-->
								<div class="col-lg-5 mb-4">

									<!--Form with header-->
									<div class="card">

										<div class="card-body">
											<!--Header-->
											<div class="form-header blue accent-1">
												<h3 class="icons"><i class="fa fa-envelope"></i> Write to us:</h3>
											</div>

											<p>We'll write rarely, but with only the best content.</p>
											<br>

											<!--Body-->
											<div class="md-form">
												<i class="fa fa-user prefix grey-text"></i>
												<input type="text" id="form-name" class="form-control">
												<label for="form-name">Your name</label>
											</div>

											<div class="md-form">
												<i class="fa fa-envelope prefix grey-text"></i>
												<input type="text" id="form-email" class="form-control">
												<label for="form-email">Your email</label>
											</div>

											<div class="md-form">
												<i class="fa fa-tag prefix grey-text"></i>
												<input type="text" id="form-Subject" class="form-control">
												<label for="form-Subject">subject</label>
											</div>

											<div class="md-form">
												<i class="fa fa-pencil"></i>
												<textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
												<label for="form-text">pesan</label>
											</div>

											<div class="text-center mt-4">
												<button class="btn btn-success">Submit</button>
											</div>

										</div>

									</div>
									<!--Form with header-->

								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-lg-7">

									<!--Google map-->
									<div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0084945981284!2d98.6204575!3d3.5855238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f5a01f97db9%3A0x24d4e3cce6acdee3!2sDMIQA%20PARFUM!5e0!3m2!1sid!2sid!4v1569383235205!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
										</iframe>

									</div>

									<br>
									<!--Buttons-->
									<div class="row text-center">
										<div class="col-md-4">
											<a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
											<p>Jl. Amal No.73, sunggal, Kec. Medan Sunggal,</p>
											<p> Kota Medan, Sumatera Utara 20127</p>
										</div>

										<div class="col-md-4">
											<a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
											<p>0812-6910-6688</p>
											<p>Mon - Sat, 08:30-23:00</p>
											<p>sunday, 09:00-23:00</p>
										</div>

										<div class="col-md-4">
											<a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
											<p>info@gmail.com</p>
											<p>Dmiqa@gmail.com</p>
										</div>
									</div>

								</div>
								<!--Grid column-->

							</div>

						</section>
						<!--Section: Contact v.1-->
					</div>
				</div>

		</div>
		</section>

		<!-- akhir contact & lokasi -->

		<!-- footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- about -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="<?= base_url('assets/depan/') ?>images/round2.png" alt=""></div>
											<div>DMIQA PARFUM</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>
										Bibit Parfum pilihan terbaik tersedia di Dmiqa perfume,Produk bisa di pesan
										secara online atau beli langgsung di toko.

									</p>
								</div>
							</div>
						</div>

						<!-- footer links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Pelayanan</div>
								<ul class="footer_list">
									<li>
										<a href="<?= base_url('comfirmation') ?>">
											<div>Konfirmasi Pembayaran<div class="footer_tag_1">check now</div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?= base_url('pengiriman') ?>">
											<div>Jasa pengiriman</div>
										</a>
									</li>
									<li>
										<a href="<?= base_url('toko') ?>">
											<div>Cek di Toko<div class="footer_tag_2">recommended</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div>Syarat & Ketentuan</div>
										</a>
									</li>
									<li>
										<a href="<?= base_url('contact') ?>">
											<div>Contact</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- footer contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Berlangganan</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Enter your email address.." required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social Media</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2">
									Copyright &copy;<script>
										document.write(new Date().getFullYear());
									</script> All rights reserved | made with <i class="fa fa-heart-o" style="color:aqua;" aria-hidden="true"></i> by <b>DmiqaTech</b>
								</div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="<?= base_url('howto') ?>">How to order</a></li>
										<li><a href="<?= base_url('member') ?>">Membership</a></li>
										<li><a href="<?= base_url('contact') ?>">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	</div>


	<script src="<?= base_url('assets/depan/') ?>js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/popper.js"></script>
	<script src="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/greensock/TweenMax.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/greensock/TimelineMax.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/greensock/animation.gsap.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/easing/easing.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/progressbar/progressbar.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?= base_url('assets/depan/') ?>js/custom.js"></script>
</body>

</html>