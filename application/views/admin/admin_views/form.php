<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<?php $title_section = (isset($item->id))? 'Edit' : 'Create'; ?>
<?php $url_section = (isset($item->id))? site_url('admin/' . $file . '/edit/' . $item->id) : site_url('admin/' . $file . '/create') ; ?>
<div class="modal-dialog">
	<div class="modal-content">
		<form class="form-horizontal" action="<?=$url_section?>" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?=$title_section?> item</h4>
			</div>
			<div class="modal-body">
				<?=$form_fields?>

				<input name="id" type="hidden" value="<?= (isset($item->id))? $item->id : ''; ?>">
				<input name="form_submit" type="hidden" value="1">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" rel="loading" data-loading-text="Sending..."><?=$title_section?> item</button>
			</div>
		</form>
	</div>
</div>
