<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<?php $title_section = (isset($item->id))? lang_phrase('form_edit_title_btn') : lang_phrase('form_create_title_btn'); ?>
<?php $url_section = (isset($item->id))? site_url('admin/' . $file . '/edit/' . $item->id) : site_url('admin/' . $file . '/create') ; ?>
<div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" action="<?=$url_section?>" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?=$title_section?></h4>
            </div>
            <div class="modal-body">

                <? if(isset($item->id) && $gallery): ?>
                <div class="form-group">
                    <div class="text-center col-sm-offset-2 col-sm-10">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#form" data-toggle="tab"><?=lang_phrase('gallery_item_title')?></a></li>
                        <li><a href="#gallery" data-toggle="tab"><?=lang_phrase('gallery_title')?></a></li>
                    </ul>
                    </div>
                </div>
                <? endif; ?>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="form">
                        <?=$form_fields?>
                    </div>
                    <? if(isset($item) && $gallery): ?>
                    <div class="tab-pane fade text-center" id="gallery">
                        <iframe src="<?=site_url('admin/gallery/gallery-list/' . $item->id . '/' . $file)?>" frameborder="0" width="550" height="340"></iframe>
                    </div>
                    <? endif; ?>
                </div>

                <input name="id" type="hidden" value="<?= (isset($item->id))? $item->id : ''; ?>">
                <input name="form_submit" type="hidden" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=lang_phrase('form_close_btn')?></button>
                <button type="submit" class="btn btn-primary" rel="loading" data-loading-text="<?=lang_phrase('form_btn_loading')?>"><?=$title_section?></button>
            </div>
        </form>
    </div>
</div>
