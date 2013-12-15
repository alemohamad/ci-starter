<div class="row-fluid">
    <div class="span12">
        <section id="list-section">

            <div class="page-header">
                <h1>Content Management System</h1>
            </div>

            <?php
            if ($this->session->flashdata('message')):
                echo $this->session->flashdata('message');
            endif;
            ?>

            <form class="form-horizontal" action="" method="post">
                <div class="control-group">
                    <label class="control-label" for="login_inputUser">Username</label>
                    <div class="controls">
                        <input type="text" name="user" id="login_inputUser" placeholder="Username" autofocus>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="login_inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="login_inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
						<label class="checkbox">
							<input type="checkbox" name="remember_me" id="login_remember_me"> Remember me <i class="icon-question-sign" rel="tooltip" data-placement="right" data-title="For security reasons, only the username will be temporary remembered."></i>
						</label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" value="submit" class="btn btn-small btn-success"><i class="icon-chevron-right icon-white"></i> Log in</button>
						<a class="btn btn-small btn-danger" href="<?php echo site_url('/admin/login/forgot-password'); ?>"><i class="icon-lock icon-white"></i> I forgot my password</a>
                    </div>
                </div>
            </form>
        </section>
    </div><!--/span-->
</div><!--/row-->

<script>
$(document).ready(function() {
    $('*[rel=tooltip]').tooltip();

	<?php $domain = url_title(ADMIN_PROJECT, '_', TRUE); ?>

    if (localStorage.chkbx_<?=$domain?> && localStorage.chkbx_<?=$domain?> != '') {
        $('#login_remember_me').attr('checked', 'checked');
        $('#login_inputUser').val(localStorage.usrname_<?=$domain?>);
    } else {
        $('#login_remember_me').removeAttr('checked');
        $('#login_inputUser').val('');
    }

    $('#login_remember_me').click(function() {
        if ($('#login_remember_me').is(':checked')) {
            localStorage.usrname_<?=$domain?> = $('#login_inputUser').val();
            localStorage.chkbx_<?=$domain?> = $('#login_remember_me').val();
        } else {
            localStorage.usrname_<?=$domain?> = '';
            localStorage.chkbx_<?=$domain?> = '';
        }
    });

    $('#login_inputUser').on('change', function() {
        if ($('#login_remember_me').is(':checked')) {
            localStorage.usrname_<?=$domain?> = $('#login_inputUser').val();
        }
    });
});
</script>
