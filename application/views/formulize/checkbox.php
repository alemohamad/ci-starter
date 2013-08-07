<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input type="checkbox" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" <?php echo ($item['value'])?'checked':''; ?>>
  </div>
</div>
