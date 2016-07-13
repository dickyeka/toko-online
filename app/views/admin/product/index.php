<?= $element->getNav(); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Input Produk</div>
			<div class="panel-body">
				<form method="post" action="<?= url('admin/product/store')?>" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" >
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" name="title" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Foto</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="img" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Toko</label>
						<div class="col-sm-10">
							<select name="merchant_id" class="form-control" required="required">
								<?php  foreach ($data['merchants'] as $merchant=>$val) : ?>	
									<option value="<?= $merchant ?>"><?= $val ?></option>
								<?php  endforeach; ?>	
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea name="description"  class="form-control" rows="3" required="required"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Harga</label>
						<div class="col-sm-10">
							<input type="number" name="price" class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Stok</label>
						<div class="col-sm-10">
							<input type="number" name="stok" class="form-control" required="required">
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
	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">Data Produk</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="30%">Name</th>
						<th width="20%">Gambar</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Toko</th>
						<th>Delete</th>
					</tr>
				</thead>
				
				<tbody>
					<?php  foreach ($data['products'] as $product) : ?>	
					<tr>
						<td><?= $product->title ?></td>
						<td>
							<img src="<?= asset('images/'.$product->image) ?>" class="img-responsive" alt="Image">
						</td>
						<td><?= $product->price ?></td>
						<td><?= $product->stok ?></td>
						<td><?= $product->merchant->name ?></td>
						<td>
							<a href="<?= url('admin/product/delete/'.$product->id )?>" onclick='return confirm("Hapus Data Ini?")'>Delete
							</a>
						</td>
					</tr>
					<?php endforeach ?>
				
				</tbody>
			</table>

			
	</div>
</div>
<?=  $element->getFooter(); ?>
