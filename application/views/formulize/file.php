<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input type="file" class="input-xlarge" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
    <input name="prev_<?php echo $item['varname']; ?>" type="hidden" value="<?php echo $item['value']; ?>">
  </div>
</div>
