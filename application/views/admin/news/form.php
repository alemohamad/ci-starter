<?php header('Content-Type:text/html; charset=UTF-8'); ?>

<?php if(isset($item->id)): ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
<?php else: ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/create'); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>

  <div class="control-group">
    <label class="control-label" for="title">Title</label>
    <div class="controls">
      <input class="input-xlarge" type="text" id="title" name="title" value="<?php echo (isset($item->title))?$item->title:''; ?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="text">Text</label>
    <div class="controls">
      <textarea class="input-xlarge" rows="6" name="text" id="textarea"><?php echo (isset($item->text))?nl2br($item->text):''; ?></textarea>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="date">Date</label>
    <div class="controls">
      <input class="input-xlarge calendar<?php echo (isset($item->id))?$item->id:''; ?>" type="text" id="date" name="date" value="<?php echo (isset($item->date))?$item->date:''; ?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="picture">Picture</label>
    <div class="controls">
      <input type="file" class="input-xlarge" id="picture" name="picture">
      <?php if(isset($item->picture)): ?>
      <input name="prev_picture" type="hidden" value="<?php echo $item->picture; ?>">
      <?php endif; ?>
    </div>
  </div>

  <?php if(isset($item->id)): ?>
  <input name="id" type="hidden" value="<?php echo $item->id; ?>">
  <?php endif; ?>

</form>

<script>
$(function() {
    $( ".calendar<?php echo (isset($item->id))?$item->id:''; ?>" ).datepicker({
         dateFormat: "yy-mm-dd",
         showButtonPanel: true
    });

    $('#textarea').wysihtml5({
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
