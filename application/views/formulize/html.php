<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php $time_item = time(); ?>
<div class="control-group">
  <label class="control-label" for="textarea-<?php echo $time_item . '-' . $item['varname']; ?>"><?php echo $item['name']; ?></label>
  <div class="controls">
    <textarea class="input-xlarge" rows="6" name="<?php echo $item['varname']; ?>" id="textarea-<?php echo $time_item . '-' . $item['varname']; ?>"><?php echo $item['value']; ?></textarea>
  </div>
</div>

<script>
$(function() {
    $('#textarea-<?php echo $time_item . '-' . $item['varname']; ?>').wysihtml5({
    	"font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
	    "emphasis": true, //Italics, bold, etc. Default true
    	"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    	"html": false, //Button which allows you to edit the generated HTML. Default false
    	"link": true, //Button to insert a link. Default true
    	"image": false, //Button to insert an image. Default true,
    	"color": false //Button to change color of font  
    });
});
</script>
