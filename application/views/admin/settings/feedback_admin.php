<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" action="<?=site_url('admin/settings/feedback-admin/')?>" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?=lang_phrase('feedback_title')?></h4>
            </div>
            <div class="modal-body">
                <?php
                echo $this->formulize->create(lang_phrase('feedback_subject'), 'subject', 'txt')->render();

                echo $this->formulize->create(lang_phrase('feedback_message'), 'message', 'html')->render();
                ?>
                <input name="form_submit" type="hidden" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=lang_phrase('feedback_close')?></button>
                <button type="submit" class="btn btn-primary" rel="loading" data-loading-text="<?=lang_phrase('feedback_send_loading')?>"><?=lang_phrase('feedback_send')?></button>
            </div>
        </form>
    </div>
</div>
