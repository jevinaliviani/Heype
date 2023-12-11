<body>
	<div class="main-w3layouts wrapper">
		<h1>Login Heype</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?= base_url('Auth'); ?>" method="POST">

				<?= $this->session->flashdata('message'); ?>
					<input class="email" type="email" name="email" value="<?= set_value('email'); ?>" 
					placeholder="Email">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					<input class="text" type="password" name="password" value="<?= set_value('password'); ?>"
					placeholder="Password">
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					<input type="submit" class="button" value="SignUp">
				</form>
				
				<p>Don't have an Account? <a href="<?= base_url('Auth/register')?>"> Register Now!</a></p>
			</div>
		</div>
</body>
