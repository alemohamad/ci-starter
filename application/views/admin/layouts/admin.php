<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
        <link href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/bootstrap/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/bootstrap/css/ui-lightness/jquery-ui-1.8.23.custom.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/bootstrap/css/styles.css'); ?>" rel="stylesheet">
        <style type="text/css">
        #status { background-image:url(<?php echo site_url('assets/bootstrap/img/loader-b.gif'); ?>); }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo site_url('assets/bootstrap/img/favicon.ico'); ?>">

        <!-- Le tablesorter javascript -->
        <script src="<?php echo site_url('assets/bootstrap/js/jquery-1.7.2.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/jquery.tablesorter.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/jquery.tablesorter.widgets.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/jquery.tablesorter.filter.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/jquery.tablesorter.pager.js'); ?>"></script>

        <!-- Le wysiwyg bootstrap editor -->
        <script src="<?php echo site_url('assets/bootstrap/editor/wysihtml5-0.3.0.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/editor/bootstrap-wysihtml5.js'); ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/bootstrap/editor/bootstrap-wysihtml5.css'); ?>"></link>
    </head>

    <body>

        <!-- Admin preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <?php if ($this->session->userdata('logged_in') == TRUE): ?>
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <?php endif; ?>
                    <a class="brand" href="<?php echo site_url('admin'); ?>"><?php echo ADMIN_PROJECT; ?></a>
                    <?php if ($this->session->userdata('logged_in') == TRUE): ?>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php echo ($file == 'news')?' class="active"':''; ?>><a href="<?php echo site_url('admin/news'); ?>">News</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $this->gravatar->get_gravatar($this->session->userdata('email'), NULL, 20); ?>" class="gravatar" style="margin-right: 5px;" alt="Profile picture"> Logged in as <?php echo $this->session->userdata('name'); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo site_url('admin/settings'); ?>"><i class="icon-user"></i> User info</a></li>
                                    <li><a href="<?php echo site_url('admin/analytics'); ?>"><i class="icon-signal"></i> Google Analytics</a></li>
                                    <li><a href="<?php echo site_url('/'); ?>" target="_blank"><i class="icon-home"></i> Go to website</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url('admin/login/logout'); ?>"><i class="icon-off"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <?= $yield ?>

            <hr>

            <footer>
                <p>&copy; <?php echo ADMIN_CLIENT; ?> <?php echo date('Y'); ?></p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo site_url('assets/bootstrap/js/google-code-prettify/prettify.js'); ?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
                $(window).load(function() { // makes sure the whole site is loaded
                    $("#status").fadeOut(); // will first fade out the loading animation
                    $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
                })
            //]]>
        </script>

    </body>
</html>