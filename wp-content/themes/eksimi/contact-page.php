<?php
/**
 * Created by PhpStorm.
 * User: Mārtiņš Frīdenbergs
 * Date: 17/12/2017
 * Time: 07:42
 */

/*
	Template Name: Contact page
 */

get_header();

$posts = get_posts(array('category' => 29));

masterslider(1);

if( have_posts() ):

    while( have_posts() ):  the_post(); ?>

        <div class="title"> <?php the_title(); ?> </div>
        <div> <?php the_content(); ?> </div>

	    <?php

	    if($posts){
	    	foreach ($posts as $post)
				the_field('name',$post->ID);
	    }

	    ?>

    <?php   endwhile;

endif;

?>

<?php get_footer(); ?>