<!doctype html>
<!--[if IE 7]>     <html class="ie7"> <![endif]-->
<!--[if gt IE 7]>  <html>             <![endif]-->
<!--[if !IE]><!--> <html>             <!--<![endif]-->
    <head>
        <link href="<?php echo $this->getThemePath(); ?>/css/reset.css" rel="stylesheet" />
        <link href="<?php echo $this->getThemePath(); ?>/css/style.css" rel="stylesheet" />
        <link href="<?php echo $this->getThemePath(); ?>/css/jquery.tabbler.css" rel="stylesheet" />
        <?php Loader::element('header_required'); ?>
    </head>
    <body>
        <div id="video-player">
        </div>
        <div id="video-dimmer">
        </div>
        <div id="header">
            <div class="container">
                <a href="<?php echo $this->url(''); ?>">
                    <img src="<?php echo $this->getThemePath(); ?>/img/logo-white.png" />
                    <h1>
                        Redeemer
                    </h1>
                </a>
            </div>
        </div>
        <div class="container">
<?php $this->inc('navigation.php'); ?>