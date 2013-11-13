<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>-list"><?php echo $item['name']; ?></label>
  <div class="controls">
    <?php if(count($item['elements'])): ?>
    <select class="input-xlarge" id="<?php echo $item['varname']; ?>-list" name="<?php echo $item['varname']; ?>[]" size="6" multiple>
      <?php foreach($item['elements'] as $value => $element): ?>
        <option value="<?php echo $value; ?>" <?php echo (strpos( (string)$item['value'], (string)$value ) !== FALSE) ? 'selected' : ''; ?>><?php echo $element; ?></option>
      <?php endforeach; ?>
    </select>
    <span class="help-block">
        <label style="display: inline-block; padding-right: 10px;"><input type="radio" name="select-<?php echo $item['varname']?>" id="sel-all-<?php echo $item['varname']?>" style="width: 11px; height: 11px;"> <small>Select all</small></label>
        <label style="display: inline-block;"><input type="radio" name="select-<?php echo $item['varname']?>" id="sel-none-<?php echo $item['varname']?>" style="width: 12px; height: 12px;"> <small>Select none</small></label></span>
    <?php else: ?>
    <span class="help-inline">There's no items to choose.</span>
    <input name="<?php echo $item['varname']; ?>" type="hidden" value="">
    <?php endif; ?>
  </div>
</div>

<script>
$('#sel-all-<?php echo $item['varname']; ?>').click( function() {
    $('#<?php echo $item['varname']; ?>-list option').prop('selected', true);
});
$('#sel-none-<?php echo $item['varname']; ?>').click( function() {
    $('#<?php echo $item['varname']; ?>-list option').prop('selected', false);
});
$('#<?php echo $item['varname']; ?>-list').change(function() {
    $('#sel-all-<?php echo $item['varname']; ?>').prop('checked', false);
    $('#sel-none-<?php echo $item['varname']; ?>').prop('checked', false);
});
</script>
