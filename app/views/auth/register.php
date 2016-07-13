<?= $element->getNav(); ?>

<div class="new-content">
	<div class="container">
	<div class="register pull-left">
	<div class="callout register-form">
			<h4 class="heading2">Register Member</h4>
			<hr class="login-separator">
			<?php  if ($input->get('message')) : ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?= $input->get('message') ?>
				</div>
			<?php endif; ?>
			<form action="<?= url('auth/store_register')?>" method="POST" role="form">				
				<div class="form-group">
					<label>Name</label>
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
				<p class="text-left"><input type="submit" class="button text-center lanjut-button" value="Daftar" name="submit"></p>
			</form>
	</div>

	<div class="clearfix"></div>
	<div class="blank-separator"></div>

	</div>
</div>

<?=  $element->getFooter(); ?>