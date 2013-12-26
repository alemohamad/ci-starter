<div class="page-header">
	<h1>Help</h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <?=$this->session->flashdata('alert_message')?>
	</div>
<?php endif; ?>

<h3 class="lead">Top menu</h3>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-user"></span>&nbsp; User info</strong></p>
	Review & update your information.
</div>

<?php if($this->session->userdata('user') == 'admin' && ADMIN_MULTIUSER): ?>
<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-th-list"></span>&nbsp; Manage users</strong></p>
	Create, update and delete CMS's users.
</div>
<?php endif; ?>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-time"></span>&nbsp; Time log</strong></p>
	This is the time that you are using the system since your last login.
</div>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-stats"></span>&nbsp; Google Analytics</strong></p>
	If this featured is turned on, you can review last month's visits using Google Analytics stats.
</div>

<?php if(ADMIN_CLEAR_CACHE): ?>
<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-trash"></span>&nbsp; Clear cached data</strong></p>
	If the website uses cached data, this button resets that feature to reads new database information instantly.
</div>
<?php endif; ?>

<?php if(ADMIN_DB_BACKUP): ?>
<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Database backup</strong></p>
	This button generates and send a database backup to your email.
</div>
<?php endif; ?>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-send"></span>&nbsp; Send feedback</strong></p>
	You can send messages to the dev team. This could be a bug, a suggestion or even a thank you!
</div>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-globe"></span>&nbsp; Open website</strong></p>
	Open the website in a new window.
</div>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-book"></span>&nbsp; Help</strong></p>
	This page.
</div>

<div class="well">
	<p class="col-md-2"><strong><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</strong></p>
	You can logout from the CMS with this button.
</div>


<h3 class="lead">Login</h3>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs btn-danger">
			<span class="glyphicon glyphicon-lock"></span>&nbsp; I forgot my password
		</button>
	</p>
	If you forgot your password, you can access this section. Tell your user and the system will send a password reset link to your email.
</div>


<h3 class="lead">Buttons / Actions</h3>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs btn-warning" rel="tooltip" data-title="Status">
			<span class="glyphicon glyphicon-eye-open"></span>
		</button>
	</p>
	The item is displayed in the website.
</div>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs" rel="tooltip" data-title="Status">
			<span class="glyphicon glyphicon-eye-close"></span>
		</button>
	</p>
	The item is not displayed in the website.
</div>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs btn-primary" rel="tooltip" data-title="Edit">
			<span class="glyphicon glyphicon-pencil"></span>
		</button>
	</p>
	Update the item information.
</div>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs btn-danger" rel="tooltip" data-title="Delete">
			<span class="glyphicon glyphicon-trash"></span>
		</button>
	</p>
	Delete the item from the website.
</div>

<div class="well">
	<p class="col-md-2">
		<button class="btn btn-xs btn-info">
			<span class="glyphicon glyphicon-filter"></span>
		</button>
	</p>
	Filter the results with some keyword/s.
</div>
