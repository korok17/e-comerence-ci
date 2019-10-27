<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/category.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/category_responsive.css">
<!-- Home -->
<div class="home">
	<div class="home_container d-flex flex-column align-items-center justify-content-end">
		<div class="home_content text-center">
			<div class="home_title"> Produk kategori</div>
			<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
				<ul class="d-flex flex-row align-items-start justify-content-start text-center">
					<li><a href="#">Home</a></li>
					<li><a href="category.html">Category</a></li>
					<li>Premium</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Products -->

<div class="products">
	<div class="container">
		<div class="row products_bar_row">
			<div class="col">
				<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
					<div class="products_bar_links">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="#">All</a></li>
							<li><a href="#">Normal</a></li>
							<li class="active"><a href="#">Premium</a></li>
							<li><a href="#">Prestige</a></li>
						</ul>
					</div>
					<div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
						<div class="products_dropdown product_dropdown_sorting">
							<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
							<ul>
								<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
								<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
								<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
							</ul>
						</div>
						<div class="products_dropdown text-right product_dropdown_filter">
							<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
							<ul>
								<li class="item_filter_btn" data-filter="*">All</li>
								<li class="item_filter_btn" data-filter=".hot">New</li>
								<li class="item_filter_btn" data-filter=".new">Normal</li>
								<li class="item_filter_btn" data-filter=".sale">Premium</li>
								<li class="item_filter_btn" data-filter=".sale">Prestige</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row products_row products_container grid">

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item new">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item hot">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item sale">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item sale">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item hot">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item new">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item sale">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item new">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

			<!-- Product -->
			<div class="col-xl-4 col-md-6 grid-item sale">
				<div class="product">
					<div class="product_image"><img src="<?= base_url('assets/portal/') ?>images/subimage3.jpg" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name"><a href="product.html">Dmiqa perfume Premium</a></div>
									<div class="product_category">In <a href="category.html">Category</a></div>
								</div>
							</div>
							<div class="ml-auto text-right">
								<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
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

		</div>
		<div class="row page_nav_row">
			<div class="col">
				<div class="page_nav">
					<ul class="d-flex flex-row align-items-start justify-content-center">
						<li class="active"><a href="#">01</a></li>
						<li><a href="#">02</a></li>
						<li><a href="#">03</a></li>
						<li><a href="#">04</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url('assets/portal/') ?>js/cart.js"></script>