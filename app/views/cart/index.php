<?= $element->getNav(); ?>

<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="well">
		<table class="table table-hover">
			<thead>
				<tr>
					<th width="50%">Product</th>
					<th>Price</th>
					<th>Qty</th>
				</tr>
			</thead>
			<tbody>
			<?php  foreach ($data['items'] as $item) : ?>
			<tr>
				<td><?= $item->title ?></td>
				<td><?= $item->price ?></td>
				<td>
					<form action="<?= url('cart/update/'.$item->id) ?>" method="POST" class="form-inline" role="form">
						<select class="form-control input-sm" name="qty">
							<?php for ($i=0; $i<= $item->stok; $i++) : ?>
							<option <?php if ($i == $item->qty) : ?> selected  <?php endif; ?> ><?= $i ?></option>
							<?php endfor; ?>
						</select>						
						<button type="submit" class="btn btn-primary btn-sm">Update</button>
					</form>

				</td>
			</tr>

			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<div class="well">
		<table class="table">
			<tr>
				<th>Total</th>
				<td><?= $data['total'] ?></td>
			</tr>
		</table>
		<a class="btn btn-primary">Cekout</a>
	</div>
</div>



<?=  $element->getFooter(); ?>
