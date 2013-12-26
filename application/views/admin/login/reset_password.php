<div class="page-header">
	<h1>Content Management System</h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <?=$this->session->flashdata('alert_message')?>
	</div>
<?php endif; ?>

<form class="form-horizontal" role="form" method="post" action="">
	<h1 class="col-sm-offset-2 lead">Reset my password</h1>
	<div class="form-group">
		<p class="col-sm-offset-2 col-sm-4">Hello <strong><?=$name?> [<?=$user?>]</strong>. Here you can provide a new password, so you can log in the CMS.</p>
	</div>
	<div class="form-group">
		<label for="password1_forgot" class="col-sm-2 control-label">New Password</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" id="password1_forgot" name="password1" autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="password2_forgot" class="col-sm-2 control-label">Repeat new Password</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" id="password2_forgot" name="password2">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-4">
			<button type="submit" name="submit" value="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-refresh"></span>&nbsp; Please, reset my password</button>
			<input type="hidden" name="user_id" value="<?=$user_id?>">
		</div>
	</div>
</form>
