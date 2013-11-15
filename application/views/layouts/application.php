<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter Project Starter</title>
        <meta name="description" content="A CodeIgniter project starter for new projects.">
        <meta name="author" content="Ale Mohamad">
        <meta name="author-url" content="http://alemohamad.com/">
        <meta name="copyright" content="Ale Mohamad">

        <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Search Ale Mohamad">

        <link rel="alternate" href="<?php echo site_url('feed'); ?>" title="Atom" type="application/atom+xml">

        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/apple-touch-icon-precomposed.png'); ?>">

        <meta property="og:title" content="CodeIgniter Project Starter">
        <meta property="og:type" content="website">
        <meta property="og:image" content="<?php echo base_url('assets/img/social.jpg'); ?>">
        <meta property="og:url" content="http://alemohamad.com">
        <meta property="og:description" content="A CodeIgniter project starter for new projects.">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="CodeIgniter Project Starter">
        <meta name="twitter:description" content="A CodeIgniter project starter for new projects.">
        <meta name="twitter:image" content="<?php echo base_url('assets/img/social.jpg'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/print.css'); ?>" media="print">

        <script src="<?php echo base_url('assets/js/head.js'); ?>"></script>
        <script>
            head.js(
                { jquery : "http://code.jquery.com/jquery-1.8.3.js"},
                { scripts : "<?php echo base_url('assets/js/scripts.js'); ?>"}
            );
        </script>
    </head>

    <body>

        <div class="container">

            <header>
                <h1>CodeIgniter Project Starter</h1>
            </header>

            <article>
<?= $yield; ?>
            </article>

            <footer>
                ci-starter by Ale Mohamad<br><img src="<?php echo base_url('assets/img/logo-am.png'); ?>" alt="Ale Mohamad">
            </footer>

        </div>

    </body>
</html>
