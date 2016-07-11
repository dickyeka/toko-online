<?= $element->getNav(); ?>

<div class="row">
	<div class="col-md-6">
		<?php  if ($input->get('error')) : ?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Gagal!</strong> login
		</div>
		<?php endif; ?>

		<form action="<?= url('auth/store_login')?>" method="POST" role="form">
			<legend>Login</legend>
		
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email" >
			</div>
 
			<div class="form-group">
				<label>Password</label>
				<input type="text" class="form-control" name="password">
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>

<?=  $element->getFooter(); ?>