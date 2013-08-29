<div class="row-fluid">
    <div class="span12">
        <section id="list-section">
            <div class="page-header">
                <h1><?php echo $title; ?></h1>
            </div>

            <?php
            if ($this->session->flashdata('message')):
                echo $this->session->flashdata('message');
            endif;
            ?>

            <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/edit-info/' . $item->id); ?>" method="post" enctype="multipart/form-data">

            <a href="http://www.gravatar.com/" target="_blank"><img src="<?php echo $this->gravatar->get_gravatar($this->session->userdata('email'), NULL, 210); ?>" class="img-polaroid" style="position: absolute; right: 20px;" rel="tooltip" data-toggle="tooltip" data-placement="bottom" data-original-title="Change your avatar at gravatar.com"></a>
            <script>
            $(document).ready( function() {
                $('img[rel=tooltip]').tooltip('hide');
            });
            </script>

            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input class="input-xlarge" type="text" id="name" name="name" value="<?php echo $item->name; ?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input class="input-xlarge" type="text" id="email" name="email" value="<?php echo $item->email; ?>">
                    <span class="help-inline"><a href="http://www.gravatar.com/" target="_blank">Gravatar</a> email account.</span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="user">Username</label>
                <div class="controls">
                    <input class="input-xlarge" type="text" id="user" name="user" value="<?php echo $item->user; ?>" disabled="disabled">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="pass_new">New password</label>
                <div class="controls">
                    <input class="input-xlarge" type="password" id="pass_new" name="pass_new">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="pass_new_repeat">Repeat new password</label>
                <div class="controls">
                    <input class="input-xlarge" type="password" id="pass_new_repeat" name="pass_new_repeat">
                    <span class="help-block"><b>Note:</b> If you don't want to change the password, leave the password fields empty.</span>
                </div>
            </div>

            <div class="form-actions">
                <button class="btn btn-primary" id="submitButton">Update info</button>
            </div>

            <input name="id" type="hidden" value="<?php echo $item->id; ?>">
            <input name="password" type="hidden" value="<?php echo $item->password; ?>">

            </form>

        </section>
    </div><!--/span-->
</div><!--/row-->
