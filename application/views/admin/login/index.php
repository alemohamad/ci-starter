<div class="page-header">
    <h1><?=lang_phrase('cms_title')?></h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?=$this->session->flashdata('alert_message')?>
    </div>
<?php endif; ?>

<form class="form-horizontal" role="form" method="post" action="">
    <div class="form-group">
        <label for="login_username" class="col-sm-2 control-label"><?=lang_phrase('login_username')?></label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="login_username" name="user" placeholder="<?=lang_phrase('login_username')?>" autofocus x-webkit-speech speech autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="login_password" class="col-sm-2 control-label"><?=lang_phrase('login_password')?></label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="login_password" name="password" placeholder="<?=lang_phrase('login_password')?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="login_remember_me"> <?=lang_phrase('login_remember')?>
                    <span rel="tooltip" data-placement="right" data-title="<?=lang_phrase('login_remember_msg')?>" class="glyphicon glyphicon-question-sign"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" name="submit" value="submit" class="btn btn-success btn-sm" rel="loading" data-loading-text="<?=lang_phrase('login_btn_login_load')?>"><span class="glyphicon glyphicon-log-in"></span>&nbsp; <?=lang_phrase('login_btn_login')?></button>
            <a href="<?=site_url('admin/login/forgot-password')?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-lock"></span>&nbsp; <?=lang_phrase('login_btn_forgot')?></a>
        </div>
    </div>
</form>
