	<!-- Home -->

	<div class="home">
		<div class="home_container d-flex flex-column align-items-center justify-content-end">
			<div class="home_content text-center">
				<div class="home_title">Account profile</div>
				<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					<ul class="d-flex flex-row align-items-start justify-content-start text-center">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- account -->

	<section class="account" id="account">
		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Selamat datang user !</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="transaksi-tab" data-toggle="tab" href="#transaksi" role="tab" aria-controls="transaksi" aria-selected="false">Transaksi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">Membership</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="col-sm-6">
								<p>Nama : ismal zikri</p>
								<p>Alamat : medan,tj.anom </p>
								<p>telephone : 081397953092</p>
								<p>Email: testerbug007@gmail.com</p>
							</div>
						</div>
						<div class="tab-pane fade" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
							<div class="col-sm-12">

								<div class="table-responsive-sm">
									<table class="table table-hover">
										<thead class="thead-dark">
											<tr>
												<th scope="col">#</th>
												<th scope="col">No order</th>
												<th scope="col">Produk</th>
												<th scope="col">Jumlah</th>
												<th scope="col">Harga</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>0008271</td>
												<td>Dmiqa parfum 100% original</td>
												<td>2 buah</td>
												<td>Rp300.000</td>
												<td>Validated
													<i class="fa fa-check-circle"></i>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>0008272</td>
												<td>Dmiqa parfum 100% original</td>
												<td>3 buah</td>
												<td>Rp450.000</td>
												<td>unvalidated
													<i class="fa fa-times-circle"></i>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>0008273</td>
												<td>Dmiqa parfum 100% original</td>
												<td>3 buah</td>
												<td>Rp450.000</td>
												<td>on process
													<i class="fa fa-hourglass-half"></i>
												</td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
							<div class="col-sm-6">
								<div class="login-content">
									<form action="index.html">
										<img src="images/avatar.svg">
										<h2 class="title" style="font-family:arial; margin: 20px 0px; font-size: 15px;">
											<p style="font-size: 20px; color:deepskyblue;">Membership Loyalti</p>
											Daftar menjadi member dengan Email Anda disini.
										</h2>
										<div class="input-div one">
											<div class="div">
												<h5 class="label">Email</h5>
												<input type="email" class="input" placeholder="youremail@.com" required="required">
											</div>
										</div>

										<input type="submit" class="btn" value="Confirm">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  akhir acccount -->