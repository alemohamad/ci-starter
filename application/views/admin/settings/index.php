<div class="page-header">
    <h1><?=$title?></h1>
</div>

<?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-<?=$this->session->flashdata('alert_type')?> alert-dismissable fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?=$this->session->flashdata('alert_message')?>
    </div>
<?php endif; ?>

<p class="col-md-9">
    <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#ui-modal" data-remote="<?= site_url('admin/' . $file . '/create'); ?>"><span class="glyphicon glyphicon-plus"></span> <?=lang_phrase('form_create_title_btn')?></button>
</p>
<p class="col-md-3 input-group input-group-sm">
    <span class="input-group-btn">
        <button class="btn btn-info" id="filter-select"><span class="glyphicon glyphicon-filter"></span></button>
    </span>
    <input type="search" class="form-control" id="filter-box" placeholder="<?=lang_phrase('filter')?>" x-webkit-speech speech autocomplete="off">
    <span class="input-group-btn">
        <button class="btn btn-info" id="filter-clear-button">&times;</button>
    </span>
</p>

<table class="table table-striped table-hover table-condensed table-responsive tablesorter">
    <thead>
        <tr>
            <th>#</th>
            <th><?=lang_phrase('manage_user')?></th>
            <th><?=lang_phrase('manage_name')?></th>
            <th><?=lang_phrase('manage_email')?></th>
            <th data-sorter="false" style="width:100px;"><?=lang_phrase('actions')?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->user?></td>
            <td><?=$item->name?></td>
            <td><?=$item->email?></td>
            <td>
                <button class="btn btn-xs <?=($item->visible)?'btn-success':''?> state-status" rel="tooltip" data-title="<?=lang_phrase('btn_status')?>" data-url="<?=site_url('admin/' . $file . '/state/' . $item->id)?>"><span class="glyphicon glyphicon-eye-<?=($item->visible)?'open':'close'?>"></span></button>
                <button class="btn btn-xs btn-primary" rel="tooltip" data-title="<?=lang_phrase('btn_edit')?>" data-toggle="modal" data-target="#ui-modal" data-remote="<?=site_url('admin/' . $file . '/edit/' . $item->id)?>"><span class="glyphicon glyphicon-pencil"></span></button>
                <button class="btn btn-xs btn-danger" rel="tooltip" data-title="<?=lang_phrase('btn_delete')?>" data-toggle="modal" data-target="#ui-modal" data-remote="<?=site_url('admin/' . $file . '/delete/' . $item->id)?>"><span class="glyphicon glyphicon-trash"></span></button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p class="container row">
    <div class="col-md-offset-3 col-md-4 paginator">
        <div class="input-group input-group-sm">
            <span class="input-group-btn">
                <button class="btn btn-info first" rel="tooltip" data-title="<?=lang_phrase('pager_first')?>"><span class="glyphicon glyphicon-backward"></span></button>
                <button class="btn btn-info prev" rel="tooltip" data-title="<?=lang_phrase('pager_previous')?>"><span class="glyphicon glyphicon-fast-backward"></span></button>
            </span>
            <input type="search" class="form-control text-center pagedisplay" id="filter-control" readonly>
            <span class="input-group-btn">
                <button class="btn btn-info next" rel="tooltip" data-title="<?=lang_phrase('pager_next')?>"><span class="glyphicon glyphicon-fast-forward"></span></button>
                <button class="btn btn-info last" rel="tooltip" data-title="<?=lang_phrase('pager_last')?>"><span class="glyphicon glyphicon-forward"></span></button>
            </span>
        </div>
    </div>
    <div class="col-md-2 paginator">
        <select class="form-control input-sm pagesize" name="">
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="99999999"><?=lang_phrase('all_items')?></option>
        </select>
    </div>
</p>

<div class="modal fade modal-form" id="ui-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<script>
var file_section = 'settings';
var pagesize_value = <?=$this->session->userdata('pagination')?>;
var url_web = '<?=site_url('/')?>';
</script>
