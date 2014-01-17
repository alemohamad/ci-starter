<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<?php $title_section = (isset($item->id))? 'Edit' : 'Create'; ?>
<?php $url_section = (isset($item->id))? site_url('admin/' . $file . '/edit/' . $item->id) : site_url('admin/' . $file . '/create') ; ?>
<div class="modal-dialog">
	<div class="modal-content">
		<form class="form-horizontal" action="<?=$url_section?>" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?=$title_section?> admin user</h4>
			</div>
			<div class="modal-body">
				<?php
				$var = isset($item->user) ? $item->user : '';
				echo $this->formulize->create('User', 'user', 'txt', $var)->render();

				echo $this->formulize->create('Password', 'password', 'password')->render();

				$var = isset($item->name) ? $item->name : '';
				echo $this->formulize->create('Name', 'name', 'txt', $var)->render();

				$var = isset($item->email) ? $item->email : '';
				echo $this->formulize->create('Email', 'email', 'txt', $var)->render();

				$admin = $this->settings->get_by( array( 'user' => 'admin' ) );
				$permissions = explode(",", $admin->permissions);
				$elements = array();
				foreach($permissions as $permission):
				    $elements[$permission] = $permission;
				endforeach;
				$var = isset($item->permissions) ? $item->permissions : '';
				echo $this->formulize->create('Admin permissions', 'permissions', 'list', $var, $elements)->render();
				?>

				<input name="id" type="hidden" value="<?= (isset($item->id))? $item->id : ''; ?>">
				<input name="form_submit" type="hidden" value="1">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" rel="loading" data-loading-text="Sending..."><?=$title_section?> user</button>
			</div>
		</form>
	</div>
</div>
