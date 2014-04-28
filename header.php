<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>
        <?php bloginfo('name'); ?> 
        <?php is_home() ? bloginfo('description') : wp_title(''); ?>
    </title>
    
    <meta charset="utf-8" />
    <meta name="description" content="Promoting older peoples' independence to remain living in their own home, with skilled staff to assist." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type='text/css' />
    
    <?php wp_head(); ?>
    <?php $options = get_option( 'tyfi_theme_options' ); ?> 
</head>

<body>
    <?php include_once("analyticstracking.php") ?>
    
    <div id="site-header">
        <div id="header-inner-container">
            <div id="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/img/tyfi-logo.png" alt="tyfi direct care" />
                </a>
            </div>
            <div id="contact-font-size">
                <?php if ($options['tyfi-contact-number'] != '' || $options['tyfi-contact-email'] != '') { ?>
                    <div id="contact">
                        <p>Contact us now:</p>
                        <p><i class="fa fa-phone fa-inverse"></i><?php echo $options['tyfi-contact-number'] ?><p>
                        <p><i class="fa fa-envelope fa-inverse"></i><?php echo $options['tyfi-contact-email'] ?></p>
                    </div>
                <?php } ?> 

                <div id="font-size-adjust">
                    <a href="#" id="font-size-increase">A</a> &#124; <a href="#" id="font-size-decrease">a</a>
                </div>
            </div>

            <?php 
                wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class'=>'nav-menu', 'container' => 'nav' ) ); 
            ?>
        </div>
    </div>