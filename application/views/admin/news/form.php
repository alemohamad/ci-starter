<?php header('Content-Type:text/html; charset=UTF-8'); ?>

<?php if(isset($item->id)): ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
<?php else: ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/create'); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>

<?php
$var = isset($item->title) ? $item->title : '';
echo $this->formulize->create('Title', 'title', 'txt', $var)->render();

$var = isset($item->text) ? $item->text : '';
echo $this->formulize->create('Text', 'text', 'html', $var)->render();

$var = isset($item->date) ? $item->date : '';
echo $this->formulize->create('Date', 'date', 'date', $var)->render();

$var = isset($item->picture) ? $item->picture : '';
echo $this->formulize->create('Picture', 'picture', 'file', $var)->render();

$var = isset($item->display) ? $item->display : '';
echo $this->formulize->create('Display', 'display', 'checkbox', $var)->render();

$elements = array(
    'sports'     => 'Sports',
    'technology' => 'Technology',
    'fashion'    => 'Fashion'
);
$var = isset($item->type) ? $item->type : '';
echo $this->formulize->create('Type', 'type', 'select', $var, $elements)->render();

$elements = array(
    'sports'     => 'Sports',
    'technology' => 'Technology',
    'fashion'    => 'Fashion'
);
$var = isset($item->type) ? $item->type : '';
echo $this->formulize->create('Type', 'type', 'list', $var, $elements)->render();
?>

  <?php if(isset($item->id)): ?>
  <input name="id" type="hidden" value="<?php echo $item->id; ?>">
  <?php endif; ?>
  <input name="form_submit" type="hidden" value="1">

</form>
