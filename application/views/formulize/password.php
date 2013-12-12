<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input class="input-xlarge" type="password" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" <?php echo $item['focus']; ?>>
    <span class="help-block"><b>Note:</b> If you don't want to change the password, leave this field empty.</span>
  </div>
</div>
