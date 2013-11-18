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

$var = isset($item->email) ? $item->email : '';
echo $this->formulize->create('Email', 'email', 'email', $var)->render();

$var = isset($item->date) ? $item->date : '';
echo $this->formulize->create('Date', 'date', 'date', $var)->render();

$var = isset($item->picture) ? $item->picture : '';
$options = array('formats' => 'JPG, PNG', 'size' => '2 MB');
echo $this->formulize->create('Picture', 'picture', 'file', $var, $options)->render();

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
    'sport' => 'Sport',
    'music' => 'Music',
    'paint' => 'Paint'
);
$elements_pics = array(
    site_url('assets/img/sport.jpg'),
    site_url('assets/img/music.jpg'),
    site_url('assets/img/paint.jpg')
);
$var = isset($item->typepic) ? $item->typepic : '';
echo $this->formulize->create('Type pic', 'typepic', 'selectpic', $var, $elements, $elements_pics)->render();

$elements = array(
    'sports'     => 'Sports',
    'technology' => 'Technology',
    'fashion'    => 'Fashion'
);
$var = isset($item->type) ? $item->type : '';
echo $this->formulize->create('Type', 'type', 'list', $var, $elements)->render();

$var = isset($item->tags) ? $item->tags : '';
echo $this->formulize->create('Tags', 'tags', 'tags', $var)->render();

$var = isset($item->order) ? $item->order : '';
echo $this->formulize->create('Order', 'order', 'number', $var)->render();

$var = isset($item->code) ? $item->code : '';
echo $this->formulize->create('Color code', 'code', 'color', $var)->render();
?>

  <?php if(isset($item->id)): ?>
  <input name="id" type="hidden" value="<?php echo $item->id; ?>">
  <?php endif; ?>
  <input name="form_submit" type="hidden" value="1">

</form>
