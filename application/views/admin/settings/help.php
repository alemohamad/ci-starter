<div class="page-header">
    <h1><?=lang_phrase('help_help_title')?></h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?=$this->session->flashdata('alert_message')?>
    </div>
<?php endif; ?>

<h3 class="lead"><?=lang_phrase('help_menu_title')?></h3>

<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-user"></span>&nbsp; <?=lang_phrase('help_user_title')?></strong></p>
    <?=lang_phrase('help_user_msg')?>
</div>

<?php if($this->session->userdata('user') == 'admin' && ADMIN_MULTIUSER): ?>
<div class="well">
    <p class="col-md-2"><strong><i class="fa fa-users"></i>&nbsp; <?=lang_phrase('help_manage_title')?></strong></p>
    <?=lang_phrase('help_manage_msg')?>
</div>
<?php endif; ?>

<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-time"></span>&nbsp; <?=lang_phrase('help_time_title')?></strong></p>
    <?=lang_phrase('help_time_msg')?>
</div>

<div class="well">
    <p class="col-md-2"><strong><i class="fa fa-bar-chart-o"></i>&nbsp; <?=lang_phrase('help_google_title')?></strong></p>
    <?=lang_phrase('help_google_msg')?>
</div>

<?php if(ADMIN_CLEAR_CACHE): ?>
<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-trash"></span>&nbsp; <?=lang_phrase('help_cache_title')?></strong></p>
    <?=lang_phrase('help_cache_msg')?>
</div>
<?php endif; ?>

<?php if(ADMIN_DB_BACKUP): ?>
<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; <?=lang_phrase('help_db_backup_title')?></strong></p>
    <?=lang_phrase('help_db_backup_msg')?>
</div>
<?php endif; ?>

<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-send"></span>&nbsp; <?=lang_phrase('help_feedback_title')?></strong></p>
    <?=lang_phrase('help_feedback_msg')?>
</div>

<div class="well">
    <p class="col-md-2"><strong><i class="fa fa-question"></i>&nbsp; <?=lang_phrase('help_help_title')?></strong></p>
    <?=lang_phrase('help_help_msg')?>
</div>

<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-globe"></span>&nbsp; <?=lang_phrase('help_open_title')?></strong></p>
    <?=lang_phrase('help_open_msg')?>
</div>

<div class="well">
    <p class="col-md-2"><strong><span class="glyphicon glyphicon-log-out"></span>&nbsp; <?=lang_phrase('help_logout_title')?></strong></p>
    <?=lang_phrase('help_logout_msg')?>
</div>


<h3 class="lead"><?=lang_phrase('help_login_title')?></h3>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs btn-danger">
            <span class="glyphicon glyphicon-lock"></span>&nbsp; <?=lang_phrase('help_forgot_title')?>
        </button>
    </p>
    <?=lang_phrase('help_forgot_msg')?>
</div>


<h3 class="lead"><?=lang_phrase('help_buttons_title')?></h3>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs btn-success" rel="tooltip" data-title="<?=lang_phrase('help_status_title')?>">
            <span class="glyphicon glyphicon-eye-open"></span>
        </button>
    </p>
    <?=lang_phrase('help_status_msg')?>
</div>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs" rel="tooltip" data-title="<?=lang_phrase('help_status_title')?>">
            <span class="glyphicon glyphicon-eye-close"></span>
        </button>
    </p>
    <?=lang_phrase('help_status_msg2')?>
</div>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs btn-primary" rel="tooltip" data-title="<?=lang_phrase('help_edit_title')?>">
            <span class="glyphicon glyphicon-pencil"></span>
        </button>
    </p>
    <?=lang_phrase('help_edit_msg')?>
</div>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs btn-danger" rel="tooltip" data-title="<?=lang_phrase('help_delete_title')?>">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
    </p>
    <?=lang_phrase('help_delete_msg')?>
</div>

<div class="well">
    <p class="col-md-2">
        <button class="btn btn-xs btn-info">
            <span class="glyphicon glyphicon-filter"></span>
        </button>
    </p>
    <?=lang_phrase('help_filter_msg')?>
</div>
