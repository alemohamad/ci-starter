<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="control-group">
  <label class="control-label" for="color-<?php echo $item['varname'] . '-' . $time_item; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input class="input-small" type="text" id="enterAColor" value="<?php echo ($item['value'])? $item['value'] : '#000000'; ?>">
    <input class="input-xlarge" type="text" id="color-<?php echo $item['varname'] . '-' . $time_item; ?>" name="<?php echo $item['varname']; ?>" value="<?php echo $item['value']; ?>" <?php echo $item['focus']; ?>>
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
