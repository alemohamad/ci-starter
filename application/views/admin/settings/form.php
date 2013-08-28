<?php header('Content-Type:text/html; charset=UTF-8'); ?>

<?php if(isset($item->id)): ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
<?php else: ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/create'); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>

<?php
$var = isset($item->user) ? $item->user : '';
echo $this->formulize->create('User', 'user', 'txt', $var)->render();

$var = isset($item->password) ? $item->password : '';
echo $this->formulize->create('Password', 'password', 'txt', $var)->render();

$var = isset($item->name) ? $item->name : '';
echo $this->formulize->create('Name', 'name', 'txt', $var)->render();

$var = isset($item->email) ? $item->email : '';
echo $this->formulize->create('Email', 'email', 'txt', $var)->render();
?>

  <?php if(isset($item->id)): ?>
  <input name="id" type="hidden" value="<?php echo $item->id; ?>">
  <?php endif; ?>
  <input name="form_submit" type="hidden" value="1">

</form>
