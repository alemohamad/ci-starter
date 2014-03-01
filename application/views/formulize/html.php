<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="form-group">
    <label for="<?php echo $time_item . '-' . $item['varname']; ?>" class="col-sm-2 control-label"><?php echo $item['name']; ?></label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="6" name="<?php echo $item['varname']; ?>" id="textarea-<?php echo $time_item . '-' . $item['varname']; ?>"><?php echo $item['value']; ?></textarea>
    </div>
</div>

<script>
$(function() {
    $('#textarea-<?php echo $time_item . '-' . $item['varname']; ?>').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false, //Button to change color of font  
        "html": true //Button which allows you to edit the generated HTML. Default false
    });
});
</script>
