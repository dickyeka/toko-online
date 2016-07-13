<?= $element->getNav(); ?>

<div class="new-content">
	<div class="container">

		<div class="clearfix"></div>

		<a href="product_detail.php"><h3 class="cart-title">Order #<?= $data['order']->hash; ?></h3></a>
		<div class="blank-separator"></div>
		<div class="invoice-section">
			<h4 class="heading2">Invoice</h4>
			<hr class="login-separator">
			<div class="invoice-detail">
				<div class="col-sm-12 history-row-first">
					<div class="col-sm-3"><p class="history-label">Order ID</p><p class="history-value">#<?= $data['order']->hash; ?></p></div>
					<div class="col-sm-3"><p class="history-label">Total Pembayaran</p><p class="history-value" class="history-value">Rp <?= $data['order']->total ?></p></div>
				</div>	
				<div class="clearfix"></div>
				<div class="inv-mini-separator"></div>
				<div class="col-sm-12 history-row-second payment-row-status">
				<div class="col-sm-3">
					<p class="history-label">Proses Pembayaran</p>
					<div class="payment-indicator unpaid  pull-left"></div> 
					<div class="text-uppercase pull-left history-value">
					<?php  if ($data['payment'] ) : ?>
					  	<?php if ($data['order']->paid==0) : ?>
							Tunggu Konfirmasi
					  	<?php elseif ($data['order']->paid==1)  : ?>
							<a href="<?= url('vocer/show/'.$data['order']->id)?>">Cetak Vocer</a>
					  	<?php endif; ?>
					 <?php  else : ?>
					 	Belum Bayar
					 <?php endif;?>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="cart-section">
		<div class="cart-table">
			<div class="cart-table-heading">
				<div class="cart-head-item pull-left">Product</div>
				<div class="cart-head-price pull-left">Price</div>
				<div class="cart-head-x pull-left">&nbsp;</div>
				<div class="cart-head-qty pull-left">Quantity</div>
				<div class="cart-head-total pull-left">Total</div>
				<div class="clearfix"></div>
			</div>
			<div class="cart-table-content">
					<?php foreach ($data['order_product'] as $order_product): ?>
						<div class="cart-data-row">
							<div class="cart-data-item pull-left">
								<p class="cart-product_type"><strong><?=  $order_product->product->title ?></strong></p>
								<p class="cart-address"><?= $order_product->product->merchant->address ?></p>
							</div>
							<div class="cart-data-price pull-left">Rp <?= $order_product->product->price ?> </div>
							<div class="cart-data-x pull-left">X</div>
							<div class="cart-data-qty pull-left">
							<?=  $order_product->qty ?>
							</div>
							<div class="cart-data-total pull-left">Rp. <?= $order_product->product->price*$order_product->qty ?></div>
						</div>
					<?php endforeach ?>
					<div class="clearfix"></div>
					<hr class="cart-separator">
								
			</div>
			<div class="cart-table-footer">				
				<div class="clearfix"></div>
			</div>
			<div class="cart-total-bayar">
				<div class="cart-row-total-bayar">
					<div class="cart-total-bayar-label pull-left">Total Pembayaran</div>
					<div class="cart-total-bayar-equal pull-left">= </div>
					<div class="cart-total-bayar-value pull-left" id="grand-total">Rp. <?= $data['order']->total ?></div>
				</div>
				<div class="clearfix"></div>
				<div class="blank-separator"></div>
			</div>

		</div>
	</div>


		<div class="clearfix"></div>
		<div class="blank-separator"></div>
		<div class="blank-separator"></div>
		
			<div class="blank-separator"></div>
			<?php  if (!$data['payment'] ) : ?>
			<div class="invoice-confirmation">
				<div class="how-to-pay pull-left">
					<h4 class="heading2">Cara Pembayaran Via Transfer</h4>
					<hr class="login-separator">
					<ol class="rekening">
						<li><p>Pilih salah satu rekening di bawah:<br />
							<strong>BCA: 7860099939 A/N PT DIGITAL MEDIA GROUP</strong><br />
							<strong>Mandiri: 1060511575188 A/N PT DIGITAL MEDIA GROUP</strong><br />
						</p></li>
					<li><p>Setelah transfer, isi kolom Konfirmasi Pembayaran di samping ini atau dengan cara: <br/>
						<strong>Login > My Account > Purchase History > Invoice Pembelian</strong></p></li>
						<li>
							<p>Konfirmasi pembayaran akan diproses dalam waktu 1 x 24 jam, lalu voucher dapat diprint melalui purchase history atau email.</p>
						</li>
					</ol>

					</div>

						<div class="payment-confirmation section pull-left">
							<h4 class="heading2">Konfirmasi Pembayaran</h4>
							<hr class="login-separator">


							<form action="<?= url('order/pay/'.$data['order']->id)?>" method="POST" role="form" enctype="multipart/form-data">

								<div class="form-group">
									<label for="">Nama Pemilik Rekening Anda</label>
									<input type="text" class="form-control"  name="name">
								</div>

								<div class="form-group">
									<label for="">Tanggal Transfer</label>
									<input type="date" class="form-control"  name="date">
								</div>

								<div class="form-group">
									<label for="">Bukti Transfer</label>
									<input type="file" class="form-control" name="img" >
								</div>			
								<button type="submit" class="btn btn-primary">Konfirmasi</button>
							</form>
						</div>

						<div class="clearfix"></div>
					</div>
					<hr>
				</div>
			<?php endif; ?>	
			<div class="clearfix"></div>
			<div class="blank-separator"></div>
			<div class="blank-separator"></div>
			<div class="clearfix"></div>
			<div class="blank-separator"></div>
			<div class="blank-separator"></div>

		</div>
	</div>
	<script src="https://dealjava.com/newlayout_resources/js/app-invoice.js"></script>

<?=  $element->getFooter(); ?>