<?php
/**
 * Created by PhpStorm.
 * User: renzhentao
 * Date: 2019/7/5
 * Time: 14:38
 */
?>
<?php get_header();?>
<?php get_sidebar('index');?>

<?php if(have_posts()):?>
    <?php while(have_posts()):the_post()?>
       <?php the_content();?>
    <?php endwhile;?>
<?php endif;?>
<?php get_sidebar();?>
<?php get_footer();?>
