<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas(); ?>
        <?php include_metas(); ?>
        <?php include_title(); ?>
        <link rel="shortcut icon" href="/img/favicon.ico" />
        <?php include_stylesheets(); ?>
        <?php include_javascripts(); ?>

        <?php include_partial('global/partials/link.fancybox.css.js'); ?>
    </head>
    <body>
        <!-- Start Main Wrapper -->
        <div class="wrapper">
            <?php include_partial('global/partials/header'); ?>
            <?php echo $sf_content; ?>
            <?php include_partial('global/partials/footer'); ?>
        </div>
        <!-- End Main Wrapper -->
    </body>
</html>
<?php
