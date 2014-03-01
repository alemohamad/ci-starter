<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <input type="file" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
        <input name="prev_<?php echo $item['varname']; ?>" type="hidden" value="<?php echo $item['value']; ?>" id="<?php echo $item['varname']; ?>-file">
        <span class="help-block small"><strong>Formats:</strong> <?php echo $item['elements']['formats']; ?>. <strong>Max size:</strong> <?php echo $item['elements']['size']; ?>.
        <?php if(!empty($item['value'])): ?>
        <br><label class="checkbox-inline"><input type="checkbox" id="<?php echo $item['varname']; ?>-file-ck"> Remove file
        <? if( preg_match("/picture/i", $item['varname']) ):?>
        - <a href="<?=site_url( picture_path('assets/uploads/' . $item['value'], 'l') )?>" target="_blank" rel="popover" data-content="<img src='<?=site_url( picture_path('assets/uploads/' . $item['value'], 's') )?>' alt='Image preview' style='max-width: 250px;'>" data-html="true" data-trigger="hover" data-delay="300"><span class="glyphicon glyphicon-picture"></span></a>
        <? endif;?>
        </label>
        <?php endif; ?>
        </span>
    </div>
</div>

<script>
var file_<?php echo $item['varname']; ?> = '';
$('#<?php echo $item['varname']; ?>-file-ck').change(function() {
    if ($(this).is(':checked')) {
        file_<?php echo $item['varname']; ?> = $('#<?php echo $item['varname']; ?>-file').val();
        $('#<?php echo $item['varname']; ?>-file').val('');
    } else {
        $('#<?php echo $item['varname']; ?>-file').val(file_<?php echo $item['varname']; ?>);
    }
});
</script>
