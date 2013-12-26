<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<div class="modal-dialog">
	<div class="modal-content">
		<form action="<?=site_url('admin/' . $file . '/delete/' . $item->id)?>" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Delete item</h4>
			</div>
			<div class="modal-body">
				<label>Are you sure you want to delete this item?</label>
				<p class="lead"><?=$item->$delete_title?></label>
				<input type="hidden" name="id" value="<?=$item->id?>" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Delete item</button>
			</div>
		</form>
	</div>
</div>
