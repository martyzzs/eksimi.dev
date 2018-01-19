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
$pageID = get_the_ID();
$posts = get_posts(array('category' => 29));

//masterslider(2);
?>

<div class="contact-background" style="background:url('<?php the_field('background',$pageID); ?>')">

<?php
if( have_posts() ):
    while( have_posts() ):  the_post(); ?>
	    <?php
	    if($posts):
	    	foreach ($posts as $post):
	    	    ?>
                <div class="contact-block-wrap">
                    <div class="row contact-block">
                        <div class="col-md-3 col-md-offset-1 contact-img" >
                            <img src="<?php the_field('image',$post->ID); ?>">
                        </div>
                        <div class="col-md-5 contact-info">
                            <div class="name"><?php the_field('name',$post->ID); ?></div>
                            <div class="position"><?php the_field('position',$post->ID); ?></div>
                            <div class="quote">"<?php the_field('quote',$post->ID); ?>"</div>
                            <div class="email"><?php the_field('e-mail',$post->ID); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
	    endif;
	    ?>

    <?php   endwhile;
endif;
?>
</div>
<?php echo do_shortcode("[huge_it_maps id='1']"); ?>

<?php get_footer(); ?>