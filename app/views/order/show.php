<?= $element->getNav(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="well">
			<h1>Order #<?= $data['order']->hash; ?></h1>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Price</th>
						<th></th>
						<th>Qty</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['order_product'] as $order_product): ?>
						<tr>
							<td><?=  $order_product->product->title ?></td>
							<td><?=  $order_product->product->price ?></td>
							<td>X</td>
							<td><?=  $order_product->qty ?></td>
							<td>
								<?=  $order_product->product->price*$order_product->qty ?>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="4"><b>Total Pembayaran</b></td>
						<td><b><?= $data['order']->total ?></b></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>


</div>


<div class="row">
	<div class="col-md-6">
	<h2>Cara Bayar</h2>
	<ol class="rekening">
		<li>
			<p>Pilih salah satu rekening di bawah:<br>
			<strong>BCA: 7860099939 A/N PT Dicky Eka S</strong><br>
			<strong>Mandiri: 1060511575188 A/N Dicky Eka S</strong><br>
			</p>
		</li>
		<li>
			<p>Setelah transfer, isi kolom Konfirmasi Pembayaran di samping ini atau dengan cara: <br>
			<strong>Login &gt; My Account &gt; Purchase History &gt; Invoice Pembelian</strong></p>
		</li>
		<li>
			<p>Konfirmasi pembayaran akan diproses dalam waktu 1 x 24 jam, lalu voucher dapat diprint melalui purchase history atau email.</p>
		</li>
	</ol>
	</div>

	<div class="col-md-6">
		<div class="well">
			<form action="" method="POST" role="form">
				<legend>Konfirmasi Pembayaran</legend>
			
				<div class="form-group">
					<label for="">Nama Pemilik Rekening Anda</label>
					<input type="text" class="form-control" >
				</div>

				<div class="form-group">
					<label for="">Tanggal Transfer</label>
					<input type="date" class="form-control" >
				</div>

				<div class="form-group">
					<label for="">Bukti Transfer</label>
					<input type="file" class="form-control" >
				</div>
			
				
			
				<button type="submit" class="btn btn-primary">Konfirmasi</button>
			</form>
		</div>	
	</div>
</div>


<?=  $element->getFooter(); ?>