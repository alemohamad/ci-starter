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
    <script src="<?= site_url('assets/admin_assets/js/filedrop-min.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
    .fd-zone {
        position: relative;
        overflow: hidden;
        width: 95%;
        height: 100px;
        margin: 15px auto 5px;
        text-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 2px dashed #c4c4c4;
        background-color: #f7f7f7;
    }
    .drop-help {
        display: table;
        width: 100%;
        height: 100%;
        cursor: pointer;
        color: #a4a4a4;
        font: normal 14px/1.4 "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    .drop-help span {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    .fd-file {
        opacity: 0;
        font-size: 118px;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1;
        padding: 0;
        margin: 0;
        cursor: pointer;
        filter: alpha(opacity=0);
        font-family: sans-serif;
    }
    .fd-zone.over { background-color: #fefefe; border-style: solid; }
    .loader {
        background-color: rgba(200, 200, 200, 0.7);
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 99999;
        text-align: center;
        top: 0;
        left: 0;
        overflow: hidden;
        color: #4a4a4a;
        font: bold 14px/1.4 "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
        -webkit-font-smoothing: antialiased;
        display: none;
    }
    </style>
</head>

<body>

<div class="loader upload-files"><br><br><br><br><?=lang_phrase('gallery_uploading')?><br><?=lang_phrase('gallery_while')?><br><br><span class="status-upload"><?=lang_phrase('gallery_uploaded')?></span></div>
<div class="loader deleting-files"><br><br><br><br><?=lang_phrase('gallery_deleting')?><br><?=lang_phrase('gallery_while')?></div>
<div class="loader state-files"><br><br><br><br><?=lang_phrase('gallery_changing')?><br><?=lang_phrase('gallery_while')?></div>

    <div id="zone">
      <div class="drop-help">
        <span><?=lang_phrase('gallery_drag')?></span>
      </div>
    </div>

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
            <button type="button" id="select_form" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-check"></i> <?=lang_phrase('gallery_selectall')?></button>
            <button type="button" id="unselect_form" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-unchecked"></i> <?=lang_phrase('gallery_unselectall')?></button>
            <button type="button" id="delete_form" class="btn btn-danger btn-xs" onclick="show_delete()"><i class="glyphicon glyphicon-remove"></i> <?=lang_phrase('gallery_delete')?></button>
            <button type="button" id="high_form"  class="btn btn-warning btn-xs" onclick="show_state()"><i class="glyphicon glyphicon-star"></i> <?=lang_phrase('gallery_highlight')?></button>
            <button type="button" id="unhigh_form"  class="btn btn-default btn-xs" onclick="show_state()"><i class="glyphicon glyphicon-star-empty"></i> <?=lang_phrase('gallery_unhighlight')?></button>
        </p>
    </form>

    <script>
    function show_delete() {
        $(".deleting-files").show();
    }
    function show_state() {
        $(".state-files").show();
    }
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

        $('#select_form').on('click', function() {
            $(".form-checkbox").prop('checked', true);
        });
        $('#unselect_form').on('click', function() {
            $(".form-checkbox").prop('checked', false);
        });

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
        
        // file drop
        var options = { iframe: { url: '<?=site_url('admin/gallery/create/' . $id . '/' . $table)?>' } };
        var zone = new FileDrop('zone', options);

        zone.event('send', function (files) {
          // alert('start upload');
          $(".upload-files").show();
          var total_files = files.length;
          var count_files = 0;
          $(".status-upload").text("<?=lang_phrase('gallery_uploaded1')?> " + count_files + " <?=lang_phrase('gallery_uploaded2')?> " + total_files + " <?=lang_phrase('gallery_uploaded3')?>");
          files.each(function (file) {
            file.event('done', function (xhr) {
              count_files++;
              $(".status-upload").text("<?=lang_phrase('gallery_uploaded1')?> " + count_files + " <?=lang_phrase('gallery_uploaded2')?> " + total_files + " <?=lang_phrase('gallery_uploaded3')?>");
              if(count_files == total_files) {
                // all files uploaded
                // alert('all files uploaded (' + count_files + ')');
                location.reload();
              }
            });
            file.sendTo('<?=site_url('admin/gallery/create/' . $id . '/' . $table)?>');
          });
        });

        zone.event('iframeDone', function (xhr) {
          // iframe uploaded
        });

        fd.addEvent(fd.byID('multiple'), 'change', function (e) {
          zone.multiple(e.currentTarget || e.srcElement.checked);
        });
        // end file drop
    });
    </script>

</body>
</html>
