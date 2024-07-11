<?php 
    /**
     * functions.php
     * @package scottshealy
     * @author Scott Shealy
     * @version 1.0.0 (2024.07.11)
     * @copyright 2024 (2024.07.11)
    **/
?>

<?php 

    if (! defined('ABSPATH')) {
        exit;
    }

    define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

    // LOAD THEME STYLESHEET AND SCRIPTS
        function hello_elementor_child_scripts_styles() {
            wp_enqueue_style(
                'hello-elementor-child-style',
                get_stylesheet_directory_uri().'/style.min.css',
                [
                    'hello-elementor-theme-style',
                ],
                HELLO_ELEMENTOR_CHILD_VERSION
            );
        }
        
        add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

?>