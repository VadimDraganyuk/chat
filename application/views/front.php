<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)) echo $title;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
</head>
<body>
<div class="p_wrap">
    <div class="p_wrapInner">
        <div class="bg_regis">
            <div class="webmail_wrap">
                <?php if(isset($content)) echo $content;?>

            </div>
        </div>
    </div>
</div>
<?php if (class_exists('ProfilerToolbar')): ?>
    <?php ProfilerToolbar::render(true); ?>
<?php endif ?>
</body>
<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</html>