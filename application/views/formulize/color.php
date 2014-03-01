<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="form-group">
    <label for="color-<?php echo $item['varname'] . '-' . $time_item; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <div class="col-md-4">
            <input type="text" class="form-control" id="enterAColor" value="<?php echo ($item['value'])? $item['value'] : '#000000'; ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="color-<?php echo $item['varname'] . '-' . $time_item; ?>" name="<?php echo $item['varname']; ?>" value="<?php echo $item['value']; ?>" <?php echo $item['focus']; ?>>
        </div>
        <span class="help-block">Only colors in hexadecimal format.</span>
    </div>
</div>

<script>
$(function() {
    $( "#color-<?php echo $item['varname'] . '-' . $time_item; ?>" ).spectrum({
       <?php if(!empty($item['value'])): ?>
         color: "<?php echo $item['value']; ?>",
       <?php else: ?>
         color: "#000000",
       <?php endif; ?>
         showInput: true,
         preferredFormat: "hex6",
         clickoutFiresChange: true,
         chooseText: "Choose color",
         cancelText: "Cancel",
         change: function(color) {
             $("#enterAColor").val( color.toHexString() );
         }
    });
    $( "#enterAColor" ).blur( function() {
        $("#color-<?php echo $item['varname']; ?>").spectrum("set", $("#enterAColor").val());
    });
});
</script>
