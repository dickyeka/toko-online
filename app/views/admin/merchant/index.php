<?= $element->getNav(); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Input Toko</div>
			<div class="panel-body">
				<form method="post" class="form-horizontal" method="POST" action="<?= url('admin/merchant/store')?>" >
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" name="name" class="form-control" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" name="address" class="form-control" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">No Telepon</label>
						<div class="col-sm-10">
							<input type="number" name="phone" class="form-control" required>
						</div>
					</div>
					<div class="hr-dashed">
						<div class="form-group">
							<div class="col-sm-8 col-sm-offset-2">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
</div>

<div class="row">
	<div class="col-md-12">
	<h2 class="page-title">Data</h2>
	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">Data toko</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="30%">Nama</th>
						<th>Alamat</th>
						<th>No Telepon</th>
						<td>Delete</td>
					</tr>
				</thead>
				
				<tbody>
					<?php  foreach ($data['merchants'] as $merchant) : ?>	
					<tr>
						<td><?= $merchant->name ?></td>
						<td><?= $merchant->address ?></td>
						<td><?= $merchant->hp ?></td>
						<td>
							<a href="<?= url('admin/merchant/delete/'.$merchant->id )?>" onclick='return confirm("Hapus Data Ini?")'>Delete
							</a>
						</td>
					</tr>
					<?php endforeach ?>
				
				</tbody>
			</table>

			
	</div>
</div>
<?=  $element->getFooter(); ?>
