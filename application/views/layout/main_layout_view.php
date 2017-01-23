<html style="width:100%;height:100%" class="no-js" lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>
        <link type="image/x-icon" href="<?= base_url('assets/images/favicon.ico'); ?>" rel="shortcut icon"/>
        <link type="image/x-icon" href="<?= base_url('assets/images/favicon.ico'); ?>" rel="icon"/>

        <!-- METAS -->
        <meta content="es" http-equiv="content-language"/>
        <meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

        <?php foreach ($metas as $name => $content): ?>
            <meta name="<?php echo $name; ?>" content="<?php echo $content; ?>"/>
        <?php endforeach; ?>


        <!-- SCRIPTS -->
        <script src="/bower_components/jquery/dist/core.js" type="text/javascript"></script>
        <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="/bower_components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/bower_components/tether/dist/js/tether.min.js" type="text/javascript"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.4.0/datepicker.js"></script>
        <script src="/bower_components/chart.js/dist/Chart.bundle.min.js" type="text/javascript"></script>
        <?php foreach ($scripts as $script_file): ?>
            <script src="<?php echo preg_match('/http/', $script_file) == 1 ? $script_file : base_url($script_file); ?>" type="text/javascript"></script>
        <?php endforeach; ?>

        <!-- CSS -->
        <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/bower_components/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="/bower_components/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/bower_components/tether/dist/css/tether.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.4.0/datepicker.css" />
        <?php foreach ($css as $css_file): ?>
            <link href="<?php echo preg_match('/http/', $css_file) == 1 ? $css_file : base_url($css_file); ?>" rel="stylesheet"/>
        <?php endforeach; ?>

        <script src="/bower_components/chart.js/dist/Chart.bundle.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            (function (e, t, n) {
                var r = e.querySelectorAll("html")[0];
                r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
            })(document, window, 0);
        </script>
    </head>
    <body>

        <?php echo $main_content; ?>
        <?php $this->view('layout/footer_view') ?>
    </body>
</html>