<?php 
    /**
     * php/scripts/head/header-scripts.php
     * @package scottshealy
     * @author Scott Shealy
     * @version 1.0.0 (2024.07.11)
     * @copyright 2024 (2024.07.11)
    **/
?>

<!-- FAVICON -->
<link rel="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/site-icon-1024x1024.png"/>

<!-- FONTS -->
<?php include(get_stylesheet_directory().'/php/scripts/external/fonts/merriweather.php'); ?>
<?php include(get_stylesheet_directory().'/php/scripts/external/fonts/roboto.php'); ?>

<!-- FONT-AWESOME -->
<?php include(get_stylesheet_directory().'/php/scripts/external/font-awesome/header.php'); ?>

<!-- FRAMEWORK -->
<?php include(get_stylesheet_directory().'/php/scripts/external/bootstrap/header.php'); ?>

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
<?php include(get_stylesheet_directory().'/php/scripts/external/google-analytics/header.php'); ?>

<!-- STYLESHEET -->
<link rel="stylesheet" src="<?php echo get_stylesheet_directory_uri(); ?>/style.min.css"/>