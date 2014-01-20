<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="<?= site_url('assets/admin_assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?= site_url('assets/admin_assets/css/ui-lightness/jquery-ui-1.8.23.custom.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/admin_assets/css/admin.css?v=' . time()); ?>" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<form id="new_gallery_form" method="post" action="<?=site_url('admin/gallery/create/' . $id . '/' . $table)?>" enctype="multipart/form-data">
<?=$fields?>
<input name="form_submit" type="hidden" value="1">
</form>

	<form id="gallery_form" method="post" action="">
		<ul class="imagePicker" id="sortable">
			<? foreach($gallery as $picture): ?>
			<li id="item-<?=$picture->id?>" class="ui-state-default"><label>
				<img src="<?=site_url('assets/uploads/' . $picture->picture . '_t.jpg')?>" alt="" />
				<?= ($picture->highlighted)?'<i class="glyphicon glyphicon-star highlight"></i>':''; ?>
				<input type="checkbox" name="picture_id[]" value="<?=$picture->id?>" class="form-checkbox" />
			</label></li>
			<? endforeach; ?>
		</ul>

		<p class="text-center">
			<button type="button" id="delete_form" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button>
			<button type="button" id="high_form"  class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-star"></i> Highlight</button>
			<button type="button" id="unhigh_form"  class="btn btn-default btn-xs"><i class="glyphicon glyphicon-star-empty"></i> Unhighlight</button>
		</p>
	</form>

	<script>
	$(document).ready(function() {
		$('input[type=file]').on('change', function() {
			$('#new_gallery_form').submit();
		});

		$("#sortable").sortable({
		    placeholder: "ui-state-highlight",
			stop: function (event, ui) {
			    var data = $(this).sortable('serialize');
		        $.ajax({
		            data: data,
		            type: 'POST',
		            url: '<?=site_url('admin/gallery/order/' . $id)?>'
		        });
		    }
		});
		$("#sortable").disableSelection();

		$('#delete_form').on('click', function() {
			var form = $('#gallery_form');
			form.attr('action', '<?=site_url('admin/gallery/status/delete/' . $id)?>');
			form.submit();
		});
		$('#high_form').on('click', function() {
			var form = $('#gallery_form');
			form.attr('action', '<?=site_url('admin/gallery/status/high/' . $id)?>');
			form.submit();
		});
		$('#unhigh_form').on('click', function() {
			var form = $('#gallery_form');
			form.attr('action', '<?=site_url('admin/gallery/status/unhigh/' . $id)?>');
			form.submit();
		});
	});
	</script>

</body>
</html>
