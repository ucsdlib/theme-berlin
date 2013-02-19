<!DOCTYPE html PUBLIC >
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    
    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
     <!--[if IE]> 
        <link rel='stylesheet' type='text/css' href='ie' media='screen' />
     <![endif]-->
    <?php
    queue_css_file('style');
    queue_css_file('skeleton');
    queue_css_url('http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    
    echo head_css(); 
    ?>
    <!-- JavaScripts -->
   <?php queue_js_file('modernizr'); ?>
    <?php queue_js_file('selectivizr-min'); ?>
    <?php queue_js_file('respond.min'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
    <?php echo body_tag(array('id'=>@$bodyid, 'class'=>@$bodyclass)); ?>
    <?php fire_plugin_hook('public_body',array('view'=>$this)); ?>
    <div id="wrap">
    
        <div id="header">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
    		
            <div id="search-container">
                <h2>Search</h2>
                    <?php echo search_form(array('show_advanced'=>TRUE)); ?>
        	</div>
            </div>	

    	   <div id="primary-nav">
               <?php
                    echo public_nav_main(); 
               ?>
           </div>
               	   <div id="mobile-nav">
               <?php
                    echo public_nav_main(); 
               ?>
           </div>
                       <?php echo theme_header_image(); ?>
    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
