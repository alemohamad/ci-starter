<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<div class="modal-dialog">
    <div class="modal-content">
        <form action="<?=site_url('admin/' . $file . '/delete/' . $item->id)?>" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?=lang_phrase('form_delete_title')?></h4>
            </div>
            <div class="modal-body">
                <label><?=lang_phrase('form_delete_msg')?></label>
                <p class="lead"><?=(isset($item->$delete_title))? $item->$delete_title:'' ?></label>
                <input type="hidden" name="id" value="<?=$item->id?>" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=lang_phrase('form_close_btn')?></button>
                <button type="submit" class="btn btn-primary" rel="loading" data-loading-text="<?=lang_phrase('form_btn_loading')?>"><?=lang_phrase('form_delete_btn')?></button>
            </div>
        </form>
    </div>
</div>
