	<!-- Home -->

	<div class="home">
		<div class="home_container d-flex flex-column align-items-center justify-content-end">
			<div class="home_content text-center">
				<div class="home_title">Konfirmasi Pembayaran</div>
				<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					<ul class="d-flex flex-row align-items-start justify-content-start text-center">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li>confirmation</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- konfirmasi -->

	<section class="konfirmasi" id="konfirmasi">
		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Konfirmasi disini!</h2>
					<hr>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-sm-12">
					<p>
						NOTE* :Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Assumenda dolorum optio magnam ratione exercitationem quidem repudiandae veniam debitis neque,
						commodi molestias saepe hic blanditiis nesciunt eaque ullam eligendi qui. Ullam.
					</p>
				</div>
				<div class="col-sm-6">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="no order">Nomor order</label>
								<input type="text" class="form-control" id="form-control" placeholder="No order">
							</div>
							<div class="form-group col-md-6">
								<label for="harga">Amount (RP)</label>
								<input type="number" name="harga" class="form-control" autocomplete="off" id="harga" placeholder="RP..">
							</div>
						</div>
						<div class="form-group">
							<label for="transaksi">transaksi ke..</label>
							<select class="form-control" id="transaksi">
								<option>BANK</option>
								<option>BNI : 002723468334 / ISMAL</option>
								<option>BRI : 023409739472 / DENIS</option>
								<option>BCA : 023409739472 / PUTRI</option>
								<option>Mandiri : 023409739472 / PUTRA</option>
							</select>
						</div>
						<div class="form-group">
							<label for="no_rek">Nama rekening anda</label>
							<input type="text" class="form-control" id="no_rek" placeholder="nama rekening kamu..">
						</div>
						<div class="form-group">
							<label for="amount">bukti pembayaran</label>
							<input type="file" id="image" name="image" class="form-control flat">
							<p class="help-block nomarb10">
								Max.2mb file size,bukti pembayaran membantu kami untuk mengkonfirmasi pembayaran Anda
							</p>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Syarat & Ketentuan
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">confirm</button>
					</form>
				</div>

			</div>
		</div>
	</section>