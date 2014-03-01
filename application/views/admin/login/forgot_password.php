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
    <h1 class="col-sm-offset-2 lead"><?=lang_phrase('forgot_title')?></h1>
    <div class="form-group">
        <label for="username_forgot" class="col-sm-2 control-label"><?=lang_phrase('forgot_username')?></label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="username_forgot" name="user" placeholder="<?=lang_phrase('forgot_username_placeholder')?>" autofocus x-webkit-speech speech autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" name="submit" value="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-lock"></span>&nbsp; <?=lang_phrase('forgot_btn_reset')?></button>
        </div>
    </div>
</form>
