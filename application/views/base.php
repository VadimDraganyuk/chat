<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Панель управления <?php echo isset($title) ? '- ' . $title : ''; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style-metro.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php if (isset($styles)): ?>
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
    <?php endif ?>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="/assets/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
<?php if (isset($header)) echo $header; ?>
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
<!-- BEGIN SIDEBAR -->
<?php if (isset($sidebar)) echo $sidebar; ?>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<?php if (isset($content)) echo $content; ?>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/assets/plugins/excanvas.js"></script>
<script src="/assets/plugins/respond.js"></script>
<![endif]-->
<script src="/assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>
<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->
<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery.blockui.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery.cookie.js" type="text/javascript"></script>
<script src="/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<script src="/assets/scripts/app.js" type="text/javascript"></script>
<script src="/assets/scripts/index.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php if (isset($plugins)): ?>
    <?php foreach ($plugins as $plugin) echo HTML::script($plugin), PHP_EOL ?>
<?php endif ?>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php if (isset($scripts)): ?>
    <?php foreach ($scripts as $script) echo HTML::script($script), PHP_EOL ?>
<?php endif ?>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initChat();
    });
</script>
<?php if (isset($javascript)) echo $javascript; ?>
<!-- END JAVASCRIPTS -->
<!--<div id="gritter-notice-wrapper">-->
<!--    <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class">-->
<!--        <div class="gritter-top"></div><div class="gritter-item"><div class="gritter-close" style="display: none;"></div>-->
<!--            <img src="./assets/img/avatar1.jpg" class="gritter-image"><div class="gritter-with-image"><span class="gritter-title">Meet Metronic!</span>-->
<!--                <p>Metronic is a brand new Responsive Admin Dashboard Template you have always been looking for!</p></div>-->
<!--            <div style="clear:both"></div></div><div class="gritter-bottom"></div></div>-->
<!--</div>-->
</body>
<!-- END BODY -->
</html>
