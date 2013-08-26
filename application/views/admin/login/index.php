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
                    <label class="control-label" for="inputUser">Username</label>
                    <div class="controls">
                        <input type="text" name="user" id="inputUser" placeholder="Username" autofocus>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" value="submit" class="btn btn-success"><i class="icon-chevron-right icon-white"></i> Log in</button>
                    </div>
                </div>
            </form>
        </section>
    </div><!--/span-->
</div><!--/row-->
