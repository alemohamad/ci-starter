<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<?php $title_section = (isset($item->id))? lang_phrase('manage_edit_title') : lang_phrase('manage_create_title'); ?>
<?php $url_section = (isset($item->id))? site_url('admin/' . $file . '/edit/' . $item->id) : site_url('admin/' . $file . '/create') ; ?>
<div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" action="<?=$url_section?>" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?=$title_section?></h4>
            </div>
            <div class="modal-body">
                <?php
                $var = isset($item->user) ? $item->user : '';
                echo $this->formulize->create(lang_phrase('manage_user'), 'user', 'txt', $var)->render();

                echo $this->formulize->create(lang_phrase('manage_password'), 'password', 'password')->render();

                $var = isset($item->name) ? $item->name : '';
                echo $this->formulize->create(lang_phrase('manage_name'), 'name', 'txt', $var)->render();

                $var = isset($item->email) ? $item->email : '';
                echo $this->formulize->create(lang_phrase('manage_email'), 'email', 'txt', $var)->render();

                $admin = $this->settings->get_by( array( 'user' => 'admin' ) );
                $permissions = explode(",", $admin->permissions);
                $elements = array();
                foreach($permissions as $permission):
                    $elements[$permission] = $permission;
                endforeach;
                $var = isset($item->permissions) ? $item->permissions : '';
                echo $this->formulize->create(lang_phrase('manage_permissions'), 'permissions', 'list', $var, $elements)->render();
                ?>

                <input name="id" type="hidden" value="<?= (isset($item->id))? $item->id : ''; ?>">
                <input name="form_submit" type="hidden" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=lang_phrase('manage_close')?></button>
                <button type="submit" class="btn btn-primary" rel="loading" data-loading-text="<?=lang_phrase('manage_loading')?>"><?=$title_section?></button>
            </div>
        </form>
    </div>
</div>
