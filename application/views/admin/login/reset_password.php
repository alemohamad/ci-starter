<div class="row-fluid">
    <div class="span12">
        <section id="list-section">

            <div class="page-header">
                <h1>Content Management System</h1>
                <p class="lead">Reset my password</p>
            </div>

            <?php
            if ($this->session->flashdata('message')):
                echo $this->session->flashdata('message');
            endif;
            ?>

            <form class="form-horizontal" action="" method="post">
                <div class="control-group">
                    <p>Hello <strong><?php echo $name; ?> [<?php echo $user; ?>]</strong>. Here you can provide a new password, so you can log in the CMS.</p>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword1">New password</label>
                    <div class="controls">
                        <input type="password" name="password1" id="inputPassword1" autofocus>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword2">Repeat new password</label>
                    <div class="controls">
                        <input type="password" name="password2" id="inputPassword2">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" value="submit" class="btn btn-small btn-danger"><i class="icon-refresh icon-white"></i> Please, reset my password</button>
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    </div>
                </div>
            </form>
        </section>
    </div><!--/span-->
</div><!--/row-->
