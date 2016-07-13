<?= $element->getNav(); ?>

<div class="new-content changealertingrefresh">
	<div class="container">
		<div class="clearfix"></div>
		<h3 class="cart-title">CHART</h3>
		<div class="blank-separator"></div>
				<div class="cart-section">
			<div class="cart-heading"><h4 class="cart-heading-step"><span class="cart-step">1</span> Jumlah Pembelian</h4></div>
			<div class="cart-heading-gray cart-heading-gray-purchase"></div>
			<div class="cart-heading-white"></div>
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
					<?php  foreach ($data['items'] as $item) : ?>
						<div class="cart-data-row">
							<div class="cart-data-item pull-left">
								<p class="cart-product_type"><strong><?= $item->title ?></strong></p>
								<p class="cart-address"><?= $item->merchant->address ?></p>
							</div>
							<div class="cart-data-price pull-left">Rp <?= $item->price ?> </div>
							<div class="cart-data-x pull-left">X</div>
							<div class="cart-data-qty pull-left">
								<select class="form-control input-sm" name="qty">
									<?php for ($i=0; $i<= $item->stok; $i++) : ?>
									<option <?php if ($i == $item->qty) : ?> selected  <?php endif; ?> ><?= $i ?></option>
									<?php endfor; ?>
								</select>	
							</div>
							<div class="cart-data-total pull-left">Rp. <?= $item->price*$item->qty ?></div>
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
						<div class="cart-total-bayar-value pull-left" id="grand-total">Rp. <?= $data['total'] ?></div>
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


			<div class="cart-section payment-method">
				<div class="cart-heading">
					<h4 class="cart-heading-step">
						<span class="cart-step">2</span> Metode Pembayaran</h4>
					</div>
					<div class="cart-heading-gray cart-heading-gray-payment"></div>
					<div class="cart-heading-white"></div>
					<div class="cart-container">
						<div class="payment-choice">
							<div class="radio radio-success radio-inline">
								<input type="radio" name="metode" class="payment-radio" id="radio-transfer" data-container = "#transfer" checked="checked" aria-label="Single radio Two" name="metode" value="0">
								<label class="radio-label" for="radio-transfer">
									Transfer
								</label>
							</div>
						</div>
						<div class="payment-detail" id="transfer">

							<div class="payment-heading">
								<p class="payment-title text-uppercase">Transfer</p>
								<hr class="payment-heading-separator">
							</div>
							<div class="payment-detail-content">
								<div class="payment-logo">

								</div>
								<p><strong>BCA: 7860099939 A/N PT DIGITAL MEDIA GROUP</strong></p>
								<p><strong>Mandiri: 1060511575188 A/N PT DIGITAL MEDIA GROUP</strong></p>


								<p>Penting:<br />
								* Apabila Anda melakukan pembelian lebih dari 1 promo (Voucher/produk yang berbeda),<br />
								mohon untuk tidak menggabungkan pembayaran tersebut<br />
								</div>

								<div class="blank-separator"></div>
						</div>
						
						<p class="text-center">
						<a  href="<?= url('cart/order') ?>">
							<input type="submit" class="button lanjut-button ubahputih" id="btn-lanjut" value="Cekout">
						</a>
						
						</p>
						<p class="text-center">Dengan mengklik "Lanjut". Anda telah membaca dan menyetujui Syarat &amp; Ketentuan Voceria</p>
						<div class="blank-separator"></div>
					</div>


					</div>

				</div>
			</div>




<?=  $element->getFooter(); ?>
