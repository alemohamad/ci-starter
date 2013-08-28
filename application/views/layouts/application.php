<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter Project Starter</title>
        <meta name="description" content="CodeIgniter Project Starter">

        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/apple-touch-icon-precomposed.png'); ?>">

        <link rel='stylesheet' href='<?php echo base_url('assets/css/reset.css'); ?>'>
        <link rel='stylesheet' href='<?php echo base_url('assets/css/styles.css'); ?>'>

        <script src='<?php echo base_url('assets/js/head.js'); ?>'></script>
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
                ci-starter v1.0 (Aug 05, 2013) by Ale Mohamad<br><img src="<?php echo base_url('assets/img/logo-am.png'); ?>" alt="Ale Mohamad">
            </footer>

        </div>

    </body>
</html>