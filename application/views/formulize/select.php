<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <?php if(count($item['elements'])): ?>
    <select class="input-xlarge" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
      <?php foreach($item['elements'] as $value => $element): ?>
        <option value="<?php echo $value; ?>" <?php echo ($value == $item['value']) ? 'selected' : ''; ?>><?php echo $element; ?></option>
      <?php endforeach; ?>
    </select>
    <?php else: ?>
    <span class="help-inline">There's no items to select.</span>
    <?php endif; ?>
  </div>
</div>
