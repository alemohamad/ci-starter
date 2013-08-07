<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input class="input-xlarge calendar-<?php echo $time_item . '-' . $item['varname']; ?>" type="text" id="<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" value="<?php echo $item['value']; ?>" <?php echo $item['focus']; ?>>
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
