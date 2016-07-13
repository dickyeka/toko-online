<?= $element->getNav(); ?>

<div class="new-content">
	<div class="container">
	<div class="register pull-left">
	<div class="callout register-form">
			<h4 class="heading2">Login Member</h4>
			<hr class="login-separator">
			<?php  if ($input->get('error')) : ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Gagal!</strong> login
				</div>
			<?php endif; ?>
			<form action="<?= url('auth/store_login')?>" method="POST" role="form">					
				<div class="form-group">
					<label for="login_username" class="no-bold">Email</label>
					<input type="text" class="form-control round"  name="email" required="required">
				</div>
				<div class="form-group">
					<label for="login_password" class="no-bold">Password</label>
					<input type="password" class="form-control round"  name="password" required="required">
				</div>
				<p class="text-left"><input type="submit" class="button text-center lanjut-button" value="Login" name="submit"></p>
			</form>
	</div>

	<div class="clearfix"></div>
	<div class="blank-separator"></div>

	</div>
</div>

<?=  $element->getFooter(); ?>