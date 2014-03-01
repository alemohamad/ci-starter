<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>-list" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <?php if(count($item['elements'])): ?>
            <select class="form-control" id="<?php echo $item['varname']; ?>-list" name="<?php echo $item['varname']; ?>[]" size="6" multiple>
                  <?php foreach($item['elements'] as $value => $element): ?>
                <option value="<?php echo $value; ?>" <?php echo (strpos( (string)$item['value'], (string)$value ) !== FALSE) ? 'selected' : ''; ?>><?php echo $element; ?></option>
                  <?php endforeach; ?>
            </select>
            <span class="help-block small">
                <label class="col-md-6"><input type="radio" name="select-<?php echo $item['varname']?>" id="sel-all-<?php echo $item['varname']?>"> Select all</label>
                <label class="col-md-6"><input type="radio" name="select-<?php echo $item['varname']?>" id="sel-none-<?php echo $item['varname']?>"> Select none</label>
            </span>
        <?php else: ?>
            <span class="help-block">There's no items to choose.</span>
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
