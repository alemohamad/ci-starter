<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <input type="checkbox" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" <?php echo ($item['value'])?'checked':''; ?>>
    </div>
</div>
