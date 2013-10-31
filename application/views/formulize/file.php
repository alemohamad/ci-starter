<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input type="file" class="input-xlarge" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
    <input name="prev_<?php echo $item['varname']; ?>" type="hidden" value="<?php echo $item['value']; ?>" id="<?php echo $item['varname']; ?>-file">
    <span class="help-block"><small><b>Formats:</b> <?php echo $item['elements']['formats']; ?>. <b>Max size:</b> <?php echo $item['elements']['size']; ?>.</small></span>
    <?php if(!empty($item['value'])): ?>
    <span class="help-block"><label><input type="checkbox" id="<?php echo $item['varname']; ?>-file-ck"> <small>Remove file</small></label></span>
    <?php endif; ?>
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
