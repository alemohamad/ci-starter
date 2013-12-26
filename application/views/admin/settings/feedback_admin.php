<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<div class="modal-dialog">
	<div class="modal-content">
		<form class="form-horizontal" action="<?=site_url('admin/settings/feedback-admin/')?>" method="post" enctype="multipart/form-data">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Send a message to the dev team</h4>
			</div>
			<div class="modal-body">
				<?php
				echo $this->formulize->create('Subject', 'subject', 'txt')->render();

				echo $this->formulize->create('Message', 'message', 'html')->render();
				?>
				<input name="form_submit" type="hidden" value="1">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Send message</button>
			</div>
		</form>
	</div>
</div>
