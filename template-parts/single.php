<?php 
    /**
     * template-parts/single.php
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
?>

<?php 
    while (have_posts()) : 
        the_post();
?>
    
    <!-- #CONTENT -->
    <main id="content" <?php post_class('site-main'); ?> role="main">
        <?php the_content(); ?>
    </main>

<?php 
    endwhile;
?>