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
						<th>ID</th>
						<th>Hash</th>
						<td>Status</td>
						<td>User</td>
						<td>Total</td>
						<td>Detail</td>
					</tr>
				</thead>
				
				<tbody>
					<?php  foreach ($data['orders'] as $order) : ?>	
					<tr>
						<td><?= $order->id ?></td>
						<td>#<?= $order->hash ?></td>
						<td>
							<?= $order->paid ? 'Sudah Bayar' : 'Belum Bayar'?>
						</td>
						<td><?= $order->user->name ?></td>
						<td><?= $order->total ?></td>
						<td><a href="<?= url('admin/order/show/'.$order->id)?>" >Lihat Detail</a></td>
					
					</tr>
					<?php endforeach ?>
				
				</tbody>
			</table>

			
	</div>
</div>
<?=  $element->getFooter(); ?>
