<?= $element->getNav(); ?>
<div class="row">
	<div class="col-md-12">
	<h2 class="page-title">Data</h2>
	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">Data Pembayaran</div>
		<div class="panel-body">
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
<?=  $element->getFooter(); ?>
