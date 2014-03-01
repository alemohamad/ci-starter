<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <?php if(count($item['elements'])): ?>
            <select class="form-control" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>">
                <option value="" selected>-- Choose an item --</option>
                  <?php foreach($item['elements'] as $value => $element): ?>
                <option value="<?php echo $value; ?>" <?php echo ($value == $item['value']) ? 'selected' : ''; ?>><?php echo $element; ?></option>
                  <?php endforeach; ?>
            </select>
        <?php else: ?>
            <span class="help-block">There's no items to choose.</span>
            <input name="<?php echo $item['varname']; ?>" type="hidden" value="">
        <?php endif; ?>
    </div>
</div>
