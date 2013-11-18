<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="control-group">
  <label class="control-label" for="select-<?php echo $time_item . '-' . $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <?php if(count($item['elements'])): ?>
    <select class="input-xlarge" id="select-<?php echo $time_item . '-' . $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
        <option value="" disabled data-image="<?php echo site_url('assets/bootstrap/img/select-empty.png'); ?>" selected>-- Choose an item --</option>
      <?php $i = 0; ?>
      <?php foreach($item['elements'] as $value => $element): ?>
        <option value="<?php echo $value; ?>" data-image="<?php echo $item['pics'][$i]; ?>" <?php echo ($value == $item['value']) ? 'selected' : ''; ?>><?php echo $element; ?></option>
        <?php $i++; ?>
      <?php endforeach; ?>
    </select>
    <?php else: ?>
    <span class="help-inline">There's no items to choose.</span>
    <input name="<?php echo $item['varname']; ?>" type="hidden" value="">
    <?php endif; ?>
  </div>
</div>

<script>
$(function() {
    $("#select-<?php echo $time_item . '-' . $item['varname']; ?>").msDropDown();
});
</script>