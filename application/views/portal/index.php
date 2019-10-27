<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dmiqa perfume</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dmiqa perfume">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="<?= base_url() ?>assets/portal/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/responsive.css">
	<link rel="shortcut icon" type="image/x-icon" href="dmiqa.ico">
</head>

<body>

	<!-- menu -->

	<div class="menu">

		<!-- search -->
		<div class="menu_search">
			<form action="#" id="menu_search_form" class="menu_search_form">
				<input type="text" class="search_input" placeholder="Search Item" required="required">
				<button class="menu_search_button"><img src="<?= base_url() ?>assets/portal/images/search.png" alt=""></button>
			</form>
		</div>
		<!-- navigation -->
		<div class="menu_nav">
			<ul>
				<li><a href="category.html">Category</a></li>
				<li><a href="member.html">Membership </a></li>
				<li><a href="howto.html">how to order</a></li>
				<li><a href="login/login.html">Login</a></li>
			</ul>
		</div>
		<!-- contact information -->
		<div class="menu_contact">
			<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
				<div>
					<div><img src="<?= base_url() ?>assets/portal/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
				</div>
				<div>+62 813-9795-3092</div>
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
							<div><img src="<?= base_url() ?>assets/portal/images/round.png" alt="www.Dmiqaperfume.com"></div>
							<div>Dmiqa perfume</div>
						</div>
					</a>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="category.html">Category</a></li>
						<li><a href="member.html">Membership</a></li>
						<li><a href="howto.html">how to order</a></li>
						<li><a href="login/login.html">Login</a></li>
					</ul>
				</nav>
				<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
					<!-- Search -->
					<div class="header_search">
						<form action="#" id="header_search_form">
							<input type="text" class="search_input" placeholder="Cari Produk.." required="required">
							<button class="header_search_button"><img src="<?= base_url() ?>assets/portal/images/search.png" alt=""></button>
						</form>
					</div>
					<!-- Cart -->
					<div class="cart">
						<a href="cart.html">
							<div>
								<img src="<?= base_url() ?>assets/portal/images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
								<div>
									0
								</div>
							</div>
						</a>
					</div>
					<!-- Phone -->
					<div class="header_phone d-flex flex-row align-items-center justify-content-start">
						<div>
							<div><img src="<?= base_url() ?>assets/portal/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div>+62 813-9795-3092</div>
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
							<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/header_slide1.jpg);"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div
											class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">New Arrivals</div>
												<div class="home_subtitle">Fresh Seeds</div>
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
							<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/header_slide2.jpg)"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div
											class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">Popular</div>
												<div class="home_subtitle">Normal Seeds</div>
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
							<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/header_slide3.jpg)"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div
											class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">Prestige Item</div>
												<div class="home_subtitle">High quality</div>
												<div class="home_items">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- slide -->
						<div class="owl-item">
							<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/header_slide4.jpg)"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div
											class="home_container d-flex flex-column align-items-center justify-content-start">
											<div class="home_content">
												<div class="home_title">Premium Items</div>
												<div class="home_subtitle">High quality</div>
												<div class="home_items">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left"
							aria-hidden="true"></i></div>
					<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right"
							aria-hidden="true"></i></div>
				</div>
			</div>

			<!-- products -->

			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section_title text-center">Produk Yang Tersedia</div>
						</div>
					</div>
					<div class="row page_nav_row">
						<div class="col">
							<div class="page_nav">
								<ul class="d-flex flex-row align-items-start justify-content-center">
									<li class="active"><a href="category.html">Semua</a></li>
									<li><a href="category.html">Normal</a></li>
									<li><a href="category.html">Premium</a></li>
									<li><a href="category.html">Prestige</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row products_row">

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume
														Premium</a></div>
												<div class="product_category">stok tersedia</a></div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume Normal
														Grade</a></div>
												<div class="product_category">Stock tersedia</div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume
														Prestige</a></div>
												<div class="product_category">Stock tersedia</div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume
														Premium</a></div>
												<div class="product_category">Stock tersedia</div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume Normal
														Grade</a></div>
												<div class="product_category">Stock tersedia</div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- product -->
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img src="<?= base_url() ?>assets/portal/images/subimage3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="product.html">Dmiqa perfume
														Prestige</a></div>
												<div class="product_category">Stock tersedia</div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating">
												<i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp300.0000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="proses">
											<a href="#" class="btn btn-outline-success">
												<i class="fa fa-cart-plus">
													Add to cart
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row load_more_row">
						<div class="col">
							<div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
						</div>
					</div>
				</div>
			</div>

			<!-- boxes -->

			<div class="boxes">
				<div class="container">
					<div class="row">
						<div class="col">
							<div
								class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

								<!-- box -->
								<div class="box">
									<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/box1.jpg)"></div>
									<div class="box_content d-flex flex-row align-items-center justify-content-start">
										<div class="box_left">
											<div class="box_image">
												<a href="category.html">
													<div class="background_image"
														style="background-image:url(<?= base_url() ?>assets/portal/images/subbox1.jpg)"></div>
												</a>
											</div>
										</div>
										<div class="box_right text-center">
											<div class="box_title">Normal choice</div>
										</div>
									</div>
								</div>

								<!-- box -->
								<div class="box">
									<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/box1.jpg)"></div>
									<div class="box_content d-flex flex-row align-items-center justify-content-start">
										<div class="box_left">
											<div class="box_image">
												<a href="category.html">
													<div class="background_image"
														style="background-image:url(<?= base_url() ?>assets/portal/images/subbox1.jpg)"></div>
												</a>
											</div>
										</div>
										<div class="box_right text-center">
											<div class="box_title">Premium Choice</div>
										</div>
									</div>
								</div>

								<!-- box -->
								<div class="box">
									<div class="background_image" style="background-image:url(<?= base_url() ?>assets/portal/images/box1.jpg)"></div>
									<div class="box_content d-flex flex-row align-items-center justify-content-start">
										<div class="box_left">
											<div class="box_image">
												<a href="category.html">
													<div class="background_image"
														style="background-image:url(<?= base_url() ?>assets/portal/images/subbox1.jpg)"></div>
												</a>
											</div>
										</div>
										<div class="box_right text-center">
											<div class="box_title">Prestige Choice</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- features -->

			<div class="features">
				<div class="container">
					<div class="row">

						<!-- feature -->
						<div class="col-lg-4 feature_col">
							<div class="feature d-flex flex-row align-items-start justify-content-start">
								<div class="feature_left">
									<div class="feature_icon"><img src="<?= base_url() ?>assets/portal/images/icon_1.svg" alt=""></div>
								</div>
								<div class="feature_right d-flex flex-column align-items-start justify-content-center">
									<div class="feature_title">Fast Secure Payments</div>
								</div>
							</div>
						</div>

						<!-- feature -->
						<div class="col-lg-4 feature_col">
							<div class="feature d-flex flex-row align-items-start justify-content-start">
								<div class="feature_left">
									<div class="feature_icon ml-auto mr-auto"><img src="<?= base_url() ?>assets/portal/images/icon_2.svg" alt=""></div>
								</div>
								<div class="feature_right d-flex flex-column align-items-start justify-content-center">
									<div class="feature_title">Good Packaging</div>
								</div>
							</div>
						</div>

						<!-- feature -->
						<div class="col-lg-4 feature_col">
							<div class="feature d-flex flex-row align-items-start justify-content-start">
								<div class="feature_left">
									<div class="feature_icon"><img src="<?= base_url() ?>assets/portal/images/icon_3.svg" alt=""></div>
								</div>
								<div class="feature_right d-flex flex-column align-items-start justify-content-center">
									<div class="feature_title">Good Delivery</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

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
												<div class="footer_logo_icon"><img src="<?= base_url() ?>assets/portal/images/round2.png" alt=""></div>
												<div>Dmiqa perfume</div>
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
											<a href="confirmation.html">
												<div>Konfirmasi pembayaran<div class="footer_tag_1">check now</div>
												</div>
											</a>
										</li>
										<li>
											<a href="pengiriman.html">
												<div>Jasa pengiriman</div>
											</a>
										</li>
										<li>
											<a href="toko.html">
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
											<a href="contact.html">
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
											<input type="email" class="newsletter_input"
												placeholder="Enter your email address.." required="required">
											<button class="newsletter_button">+</button>
										</form>
									</div>
									<div class="footer_social">
										<div class="footer_title">Social Media</div>
										<ul
											class="footer_social_list d-flex flex-row align-items-start justify-content-start">
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
											</li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											</li>
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
								<div
									class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
									<div class="copyright order-md-1 order-2">
										Copyright &copy;<script>
											document.write(new Date().getFullYear());
										</script> All rights reserved | made with <i class="fa fa-heart-o"
											style="color:aqua;" aria-hidden="true"></i> by <b>DmiqaTech</b>
									</div>
									<nav class="footer_nav ml-md-auto order-md-2 order-1">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><a href="howto.html">How to order</a></li>
											<li><a href="member.html">Membership</a></li>
											<li><a href="contact.html">Contact</a></li>
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

	<script src="<?= base_url() ?>assets/portal/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/popper.js"></script>
	<script src="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/greensock/TweenMax.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/greensock/TimelineMax.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/greensock/animation.gsap.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/easing/easing.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/progressbar/progressbar.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?= base_url() ?>assets/portal/js/custom.js"></script>
</body>

</html>