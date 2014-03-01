<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" value="<?php echo $item['value']; ?>" <?php echo $item['focus']; ?>>
    </div>
</div>
