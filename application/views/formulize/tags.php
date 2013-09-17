<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="control-group">
  <label class="control-label" for="<?php echo $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <input class="input-mini" type="text" id="tags-<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" placeholder="Tags" <?php echo $item['focus']; ?>>
  </div>
</div>

<script>
<?php $values = explode(",", $item['value']); ?>
$(function() {
    $("#tags-<?php echo $item['varname']; ?>").tagsManager({
        prefilled: [<?php
                        $val = '';
                        foreach($values as $value):
                        $val .= "'{$value}', ";
                        endforeach;
                        echo substr($val, 0, -2);
                    ?>]
    });
});
</script>
