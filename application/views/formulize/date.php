<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control calendar-<?php echo $time_item . '-' . $item['varname']; ?>" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" value="<?php echo $item['value']; ?>" readonly <?php echo $item['focus']; ?>>
    </div>
</div>

<script>
$(function() {
    $( ".calendar-<?php echo $time_item . '-' . $item['varname']; ?>" ).datepicker({
         dateFormat: "yy-mm-dd",
         showButtonPanel: true
    });
});
</script>
