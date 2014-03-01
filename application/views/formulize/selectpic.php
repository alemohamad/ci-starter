<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="form-group">
    <label for="select-<?php echo $time_item . '-' . $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <?php if(count($item['elements'])): ?>
            <select class="form-control" id="select-<?php echo $time_item . '-' . $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
                <option value="" data-image="<?php echo site_url('assets/admin_assets/img/select-empty.png'); ?>" selected>-- Choose an item --</option>
                  <?php $i = 0; ?>
                  <?php foreach($item['elements'] as $value => $element): ?>
                <option value="<?php echo $value; ?>" data-image="<?php echo $item['pics'][$i]; ?>" <?php echo ($value == $item['value']) ? 'selected' : ''; ?>><?php echo $element; ?></option>
                <?php $i++; ?>
                  <?php endforeach; ?>
            </select>
        <?php else: ?>
            <span class="help-block">There's no items to choose.</span>
            <input name="<?php echo $item['varname']; ?>" type="hidden" value="">
        <?php endif; ?>
    </div>
</div>

<script>
$(function() {
    $("#select-<?php echo $time_item . '-' . $item['varname']; ?>").msDropDown();
});
</script>
