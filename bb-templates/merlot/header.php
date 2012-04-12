<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php bb_language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php bb_language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php bb_language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php bb_language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php bb_language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php bb_title(); ?></title>
	    <?php bb_feed_head(); ?> 
	    <?php merlot_bootstrap_css(); ?>
	    <link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
	    <?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
	    <link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
    <?php endif; ?>

    <?php bb_head(); ?>
    </head>

    <body id="<?php bb_location(); ?>" class="<?php gs_body_classes(); ?>">
	
	    <?php do_action('before_header'); ?>
	    <div class="container">
	        <?php do_action('before_navbar'); ?>
	            
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <?php do_action('before_navigation'); ?>
			            <?php gs_navigation(); ?>
			            <?php do_action('after_navigation'); ?>
                    </div>
                </div>
                   
            </div>
            
            <?php do_action('after_navbar'); ?>
        </div>    
        
        <?php do_action('after_header'); ?>

	    <div class="container">	
	
		    <div class="row">
		        <div class="span12">
		        <?php gs_header_breadcrumb(); ?>
		        <?php gs_page_header(); ?>
