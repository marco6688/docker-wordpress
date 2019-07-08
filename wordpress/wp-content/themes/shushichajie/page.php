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
        <h1><?php the_ID();?></h1>
        <h1><?php the_title();?></h1>
        <h1><?php the_content();?></h1>
    <?php endwhile;?>

<?php endif;?>
<?php get_sidebar();?>
<?php get_footer();?>
