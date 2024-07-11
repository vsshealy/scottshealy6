<?php 
    /**
     * header.php
     * @package scottshealy
     * @author Scott Shealy
     * @version 1.0.0 (2024.07.11)
     * @copyright 2024 (2024.07.11)
    **/
?>

<?php if (! defined('ABSPATH')) {
    exit;
} ?>

<!-- SCOTTSHEALY.COM | WEBSITE DESIGN: SCOTT SHEALY -->

<html id="scottshealy" class="h-100" <?php language_attributes(); ?>>

    <!-- HEAD -->
    <head>

        <!-- TITLE -->
        <title><?php single_post_title(); ?> | <?php bloginfo('name'); ?></title>

        <!-- META -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/meta.php'); ?>

        <!-- HEADER-SCRIPTS -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/header-scripts.php'); ?>

    </head>
    
    <!-- BODY -->
    <body id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug ?>" <?php body_class(); ?>>

        <!-- #HEADER-MAIN -->
        <?php
            hello_elementor_body_open();

            if (! function_exists('elementor_theme_do_location') || ! elementor_theme_do_location('header')) {
                if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
                    get_template_part('template-parts/dynamic-header');
                } else {
                    get_template_part('template-parts/header');
                }
            }
        ?>