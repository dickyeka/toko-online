<?= $element->getNav(); ?>

<div class="row">
	<div class="col-md-6">
		<?php  if ($input->get('message')) : ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?= $input->get('message') ?>
			</div>
		<?php endif; ?>
		<form action="<?= url('auth/store_register')?>" method="POST" role="form">
			<legend>Register</legend>

			<div class="form-group">
				<label>name</label>
				<input type="text" class="form-control" name="name">
			</div>
		
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email">
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