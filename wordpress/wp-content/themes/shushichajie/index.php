<?php
/**
 * Created by PhpStorm.
 * User: renzhentao
 * Date: 2019/7/5
 * Time: 14:38
 */
?>
<?php get_header();?>
<h3><?php _e('main content','fenikso')?></h3>
<?php get_sidebar('index');?>
<?php echo do_shortcode('[slick-slider]'); ?>
<?php get_sidebar();?>
<?php get_footer();?>
