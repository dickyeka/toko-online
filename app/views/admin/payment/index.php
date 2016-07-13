<?= $element->getNav(); ?>
<div class="row">
	<div class="col-md-12">
	<h2 class="page-title">Data</h2>
	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">Data Pembayaran</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Bukti</th>
						<td>Jumlah Transakasi</td>
						<td>Status</td>
						<td>Konfirmasi</td>
					</tr>
				</thead>
				
				<tbody>
					<?php  foreach ($data['payments'] as $payment) : ?>	
					<tr>
						<td>#<?= $payment->order_id ?></td>
						<td>
						<a href="<?= asset('images/'.$payment->evidence) ?>" target="_blank">
							Lihat
						</a>
						</td>
						<td>Rp.<?= $payment->order->total ?></td>
						<td>
							<?= $payment->confirmed ? 'Sudah Bayar' : 'Belum Bayar'?>
						</td>
						<td>
							<?php if (!$payment->confirmed) : ?>
							<a href="<?= url('admin/payment/confirmed/'.$payment->id )?>" onclick='return confirm("Ada yakin?")'>Konfrimasi
							</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach ?>
				
				</tbody>
			</table>

			
	</div>
</div>
<?=  $element->getFooter(); ?>
