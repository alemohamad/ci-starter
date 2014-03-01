<div class="page-header">
    <h1><?=$title?></h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?=$this->session->flashdata('alert_message')?>
    </div>
<?php endif; ?>

<form class="form-horizontal col-md-9" role="form" method="post" action="<?=site_url('admin/' . $file . '/edit-info/' . $item->id)?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 control-label"><?=lang_phrase('profile_name')?></label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="name" name="name" value="<?=$item->name?>" autofocus autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label"><?=lang_phrase('profile_email')?></label>
        <div class="col-sm-7">
            <input type="email" class="form-control" id="email" name="email" value="<?=$item->email?>" autocomplete="off">
            <p class="help-block"><span class="label label-info">INFO</span> <small><?=lang_phrase('profile_email_msg')?></small></p>
        </div>
    </div>
    <div class="form-group">
        <label for="user" class="col-sm-3 control-label"><?=lang_phrase('profile_username')?></label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="user" name="user" value="<?=$item->user?>" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label for="new-password" class="col-sm-3 control-label"><?=lang_phrase('profile_new_pass')?></label>
        <div class="col-sm-7">
            <input type="password" class="form-control" id="new-password" name="pass_new">
        </div>
    </div>
    <div class="form-group">
        <label for="repeat-new-password" class="col-sm-3 control-label"><?=lang_phrase('profile_new_pass_2')?></label>
        <div class="col-sm-7">
            <input type="password" class="form-control" id="repeat-new-password" name="pass_new_repeat">
            <p class="help-block"><span class="label label-info">INFO</span> <small><?=lang_phrase('profile_new_pass_msg')?></small></p>
        </div>
    </div>
    <?php if($this->session->userdata('user') == 'admin' && ADMIN_MULTIUSER): ?>
    <?php $var_tags = isset($item->permissions) ? $item->permissions : ''; ?>
        <div class="form-group">
            <label for="tags-permissions" class="col-sm-3 control-label"><?=lang_phrase('profile_sections')?></label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="tags-permissions" name="permissions" placeholder="Tags">
            </div>
        </div>

        <script>
        <?php $values = explode(",", $var_tags); ?>
        window.onload = function() {
            $("#tags-permissions").tagsManager({
                prefilled: [<?php
                                $val = '';
                                foreach($values as $value):
                                $val .= "'{$value}', ";
                                endforeach;
                                echo substr($val, 0, -2);
                            ?>]
            });
        };
        </script>
    <?php endif; ?>
    <div class="form-group">
        <label for="theme" class="col-sm-3 control-label"><?=lang_phrase('profile_theme')?></label>
        <div class="col-sm-7">
            <select class="form-control" id="theme" name="theme">
                <option value="default" <?php echo ('default' == $item->theme) ? 'selected' : ''; ?>><?=lang_phrase('profile_theme_default')?></option>
                <option value="blue" <?php echo ('blue' == $item->theme) ? 'selected' : ''; ?>><?=lang_phrase('profile_theme_blue')?></option>
                <option value="green" <?php echo ('green' == $item->theme) ? 'selected' : ''; ?>><?=lang_phrase('profile_theme_green')?></option>
                <option value="yellow" <?php echo ('yellow' == $item->theme) ? 'selected' : ''; ?>><?=lang_phrase('profile_theme_yellow')?></option>
                <option value="pink" <?php echo ('pink' == $item->theme) ? 'selected' : ''; ?>><?=lang_phrase('profile_theme_pink')?></option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-7">
            <button type="submit" class="btn btn-primary btn-sm" rel="loading" data-loading-text="<?=lang_phrase('profile_save_btn_loading')?>"><?=lang_phrase('profile_save_btn')?></button>
            <input name="id" type="hidden" value="<?=$item->id?>">
        </div>
    </div>
</form>

<p class="col-md-3 text-right">
    <img src="<?=$this->gravatar->get_gravatar($this->session->userdata('email'), NULL, 220)?>" alt="Gravatar picture" class="img-rounded" rel="tooltip" data-title="<?=lang_phrase('profile_gravatar_msg')?>" data-placement="bottom">
</p>
