<?php
/**
 * Created by PhpStorm.
 * User: Mārtiņš Frīdenbergs
 * Date: 16/12/2017
 * Time: 13:52
 */
?>

<?php get_header(); ?>



    <?php
        if( have_posts() ):

            while( have_posts() ):  the_post(); ?>

                <div class="content-wrap row">
                    <div class="col-md-12 inner-wrap">
                        <?php the_content(); ?>
                    </div>
                </div>

         <?php   endwhile;

        endif;
    ?>

<?php masterslider(1); ?>

<?php get_footer(); ?>