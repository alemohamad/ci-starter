<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<form action="<?php echo site_url('admin/' . $file . '/delete/' . $item->id); ?>" method="post">
  <label>Are you sure you want to delete this item?</label>
  <p class="lead"><?php echo $item->user; ?></label>
  <input type="hidden" name="id" value="<?php echo $item->id; ?>" />
</form>
