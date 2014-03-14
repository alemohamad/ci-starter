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
    <?php if($create): ?>
    <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#ui-modal" data-remote="<?= site_url('admin/' . $file . '/create'); ?>"><span class="glyphicon glyphicon-plus"></span> <?=lang_phrase('create_item')?></button>
    <?php endif; ?>
    
    <?php if($export_file): ?>
    <button class="btn btn-sm btn-success" onclick="window.location='<?= site_url('admin/' . $file . '/export'); ?>'"><span class="glyphicon glyphicon-file"></span> <?=lang_phrase('export_csv')?></button>
    <?php endif; ?>
</p>

<?php if($show_list): ?>
<p class="col-md-3 input-group input-group-sm">
    <span class="input-group-btn">
        <button class="btn btn-info" id="filter-select"><span class="glyphicon glyphicon-filter"></span></button>
    </span>
    <input type="search" class="form-control" id="filter-box" placeholder="<?=lang_phrase('filter')?>" x-webkit-speech speech autocomplete="off">
    <span class="input-group-btn">
        <button class="btn btn-info" id="filter-clear-button">&times;</button>
    </span>
</p>

<table class="table table-striped table-hover table-condensed table-responsive tablesorter page-header">
    <thead>
        <tr>
            <th>#</th>
            <?php foreach($display_fields as $field): ?>
            <?php $this->load->helper('inflector'); ?>
            <th><?= humanize($field); ?></th>
            <?php endforeach; ?>
            <th data-sorter="false" style="width:100px;"><?=lang_phrase('actions')?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): ?>
        <tr>
            <td><?=$item->id?></td>
            <?php foreach($display_fields as $field): ?>
                <?php if(preg_match("/picture/i", $field) && !empty($item->$field)): ?>
                <td><a href="<?=site_url( picture_path('assets/uploads/' . $item->$field, 'l') )?>" target="_blank" rel="popover" data-content="<img src='<?=site_url( picture_path('assets/uploads/' . $item->$field, 's') )?>' alt='Image preview' style='max-width: 250px;'>" data-html="true" data-trigger="hover" data-delay="300"><span class="glyphicon glyphicon-picture"></span></a></td>
                <?php elseif(preg_match("/color/i", $field) && !empty($item->$field)): ?>
                <td><span class="glyphicon glyphicon-tint" style="color: <?=$item->$field?>; text-shadow:0px 0px 4px #b8babc;"></span> <small><?=$item->$field?></small></td>
                <?php elseif(is_array($item->$field)): ?>
                <td>-</td>
                <?php elseif(is_object($item->$field)): ?>
                    <?php if(isset($item->$field->title)): ?>
                    <td><?=$item->$field->title?></td>
                    <?php elseif(isset($item->$field->name)): ?>
                    <td><?=$item->$field->name?></td>
                    <?php endif; ?>
                <?php else: ?>
                <td><?=$item->$field?></td>
                <?php endif; ?>
            <?php endforeach; ?>
            <td>
                <?php if($state): ?>
                <button class="btn btn-xs <?=($item->visible)?'btn-success':''?> state-status" rel="tooltip" data-title="<?=lang_phrase('btn_status')?>" data-url="<?=site_url('admin/' . $file . '/state/' . $item->id)?>"><span class="glyphicon glyphicon-eye-<?=($item->visible)?'open':'close'?>"></span></button>
                <?php endif; ?>
                <?php if($edit): ?>
                <button class="btn btn-xs btn-primary" rel="tooltip" data-title="<?=lang_phrase('btn_edit')?>" data-toggle="modal" data-target="#ui-modal" data-remote="<?=site_url('admin/' . $file . '/edit/' . $item->id)?>"><span class="glyphicon glyphicon-pencil"></span></button>
                <?php endif; ?>
                <?php if($delete): ?>
                <button class="btn btn-xs btn-danger" rel="tooltip" data-title="<?=lang_phrase('btn_delete')?>" data-toggle="modal" data-target="#ui-modal" data-remote="<?=site_url('admin/' . $file . '/delete/' . $item->id)?>"><span class="glyphicon glyphicon-trash"></span></button>
                <?php endif; ?>
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
<?php endif; ?>

<div class="modal fade modal-form" id="ui-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="text-center container"><img src="<?=site_url('assets/admin_assets/img/load_modal.gif')?>" alt="Loading modal" style="padding: 9px;"></div>
</div>
<script>
var file_section = 'news';
var pagesize_value = <?=$this->session->userdata('pagination')?>;
var url_web = '<?=site_url('/')?>';
</script>
