<body>
	<div class="main-w3layouts wrapper">
		<h1>Register Heype</h1>
		<?= $this->session->flashdata('message'); ?>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?= base_url('Auth/register'); ?>" method="POST">
					<input class="nama" type="text" name="nama" 
					value="<?= set_value('nama'); ?>" placeholder="Username">
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
					<input class="email" type="email" name="email" 
					value="<?= set_value('email'); ?>" placeholder="Email">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
					<input class="text" type="password" name="password1" 
					value="<?= set_value('password1'); ?>" placeholder="Password">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
					<input class="text w3lpass" type="password" name="password2"
					value="<?= set_value('password2'); ?>"placeholder="Confirm Password">
					<?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
					
					<input type="submit" value="SignIn">
				</form>
				<p>Don't have an Account? <a href="<?= base_url('Auth/')?>"> Login Now!</a></p>
			</div>
		</div>
</body>

