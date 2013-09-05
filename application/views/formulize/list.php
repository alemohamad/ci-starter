<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>-list"><?php echo $item['name']; ?></label>
  <div class="controls">
    <?php if(count($item['elements'])): ?>
    <select class="input-xlarge" id="<?php echo $item['varname']; ?>-list" name="<?php echo $item['varname']; ?>" size="6" multiple>
        <option value="0">None</option>
      <?php foreach($item['elements'] as $value => $element): ?>
        <option value="<?php echo $value; ?>" <?php echo (strpos($item['value'], $value) !== FALSE) ? 'selected' : ''; ?>><?php echo $element; ?></option>
      <?php endforeach; ?>
    </select>
    <?php else: ?>
    <span class="help-inline">There's no items to choose.</span>
    <?php endif; ?>
  </div>
</div>

<script>
$('#<?php echo $item['varname']; ?>-list').change(function() {
    if ($('option:first', this).is(':selected')) {
        $('option:not(:first)', this).prop('selected', false);
    }
});
</script>
