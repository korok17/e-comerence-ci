	<!-- home -->

	<div class="home">
		<div class="home_container d-flex flex-column align-items-center justify-content-end">
			<div class="home_content text-center">
				<div class="home_title"> Detail Produk </div>
				<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					<ul class="d-flex flex-row align-items-start justify-content-start text-center">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li><a href="<?= base_url('category') ?>">Category</a></li>
						<li>Alkohol</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- product -->

	<div class="product">
		<div class="container">
			<div class="row">

				<!-- product image -->
				<div class="col-lg-6">
					<div class="product_image_slider_container">
						<div id="slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="<?= base_url('assets/depan/') ?>images/subimage3.jpg" />
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- product information -->
				<div class="col-lg-6 product_col">
					<div class="product_info">
						<div class="product_name">Dmiqa perfume demo view</div>
						<div class="product_category">In <a href="category.html">Category</a></div>
						<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
							<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="product_reviews">4.7 out of (3514)</div>
							<div class="product_reviews_link"><a href="#">Reviews</a></div>
						</div>
						<div class="product_price">Rp300.000</div>


						<div class="product_size_title">Informasi Produk</div>
						<div class="row">
							<div class="col-sm-12">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab" aria-controls="tentang" aria-selected="true">tentang</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="komposisi-tab" data-toggle="tab" href="#komposisi" role="tab" aria-controls="komposisi" aria-selected="false">Komposisi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pemakaian-tab" data-toggle="tab" href="#pemakaian" role="tab" aria-controls="pemakaian" aria-selected="false">Pemakaian</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
										<div class="col-sm-6">
											<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
												Nam culpa voluptatum corporis ipsum impedit voluptates.
												Expedita rerum, sunt hic in neque nam totam ab nostrum quae. Voluptas numquam in ipsam.
											</p>

										</div>
									</div>
									<div class="tab-pane fade" id="komposisi" role="tabpanel" aria-labelledby="komposisi-tab">
										<div class="col-sm-6">
											<p>Under contraction..!!</p>
										</div>
									</div>
									<div class="tab-pane fade" id="pemakaian" role="tabpanel" aria-labelledby="pemakaian-tab">
										<div class="col-sm-6">
											<p>Under contraction..!!</p>
										</div>
									</div>
								</div>
							</div>
						</div>




						<div class="product_buttons">
							<div class="text-right d-flex flex-row align-items-start justify-content-start">
								<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
									<div>
										<div><img src="<?= base_url('assets/depan/') ?>images/heart_2.svg" class="svg" alt="">
											<div>+</div>
										</div>
									</div>
								</div>
								<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
									<div>
										<div><img src="<?= base_url('assets/depan/') ?>images/cart.svg" class="svg" alt="">
											<div>+</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="box d-flex flex-row align-items-center justify-content-start">
						<div class="mt-auto">
							<div class="box_image"><img src="<?= base_url('assets/depan/') ?>images/icon_1.svg" alt=""></div>
						</div>
						<div class="box_content">
							<div class="box_title">Payment method</div>
							<div class="box_text">
								Pilihan Pembayaran yang mudah dan cepat.
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 box_col">
					<div class="box d-flex flex-row align-items-center justify-content-start">
						<div class="mt-auto">
							<div class="box_image"><img src="<?= base_url('assets/depan/') ?>images/boxes_2.png" alt=""></div>
						</div>
						<div class="box_content">
							<div class="box_title">Shipping</div>
							<div class="box_text">Pilihan jasa pengiriman terbaik se indonesia</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>