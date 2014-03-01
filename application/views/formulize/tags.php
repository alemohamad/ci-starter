<?php header("Content-type: text/html; charset=utf-8"); ?>
<div class="form-group">
    <label for="<?php echo $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="tags-<?php echo $item['varname']; ?>" name="<?php echo $item['varname']; ?>" placeholder="Tags" <?php echo $item['focus']; ?>>
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
