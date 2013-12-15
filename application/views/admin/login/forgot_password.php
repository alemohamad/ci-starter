<div class="row-fluid">
    <div class="span12">
        <section id="list-section">

            <div class="page-header">
                <h1>Content Management System</h1>
                <p class="lead">I forgot my password!</p>
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
                        <input type="text" name="user" id="inputUser" placeholder="What's your username?" autofocus>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" value="submit" class="btn btn-small btn-danger"><i class="icon-lock icon-white"></i> Reset my password</button>
                    </div>
                </div>
            </form>
        </section>
    </div><!--/span-->
</div><!--/row-->
