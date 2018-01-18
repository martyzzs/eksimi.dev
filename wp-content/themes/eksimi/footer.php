<?php
/**
 * Created by PhpStorm.
 * User: Mārtiņš Frīdenbergs
 * Date: 16/12/2017
 * Time: 14:02
 */

switch (get_locale()){
    case "lv":
	    $posts = get_posts(array('category' => 36));
	    break;
    case "en_GB":
	    $posts = get_posts(array('category' => 40));
	    break;
    case "ru_RU":
		$posts = get_posts(array('category' => 42));
		break;
    default:
	    $posts = get_posts(array('category' => 36));
	    break;
}

if($posts){
	foreach ($posts as $post){
	    if(has_tag('Kontakti')){
	        $contacts_title = $post->post_title;
	        $contacts_content = $post->post_content;
        }

		if(has_tag('info')){
			$info_title = $post->post_title;
			$info_content = $post->post_content;
		}

    }
}

?>

        <footer>
            <div class="row">
                <div class="col-md-4 col-xs-12 social">
                    <div class="social-ico col-md-4 col-md-offset-2 col-xs-4"><a class="fb"><img src="<?php echo get_template_directory_uri() . '/fb-ico.svg'?>"/></a></div>
                    <div class="social-ico col-md-4 col-xs-4"><a class="mail"><img src="<?php echo get_template_directory_uri() . '/mail-ico.svg'?>"/></a></div>
                </div>
                <div class="col-md-4 col-xs-12  contacts">
                    <?php if($contacts_title):
                        echo '<div class="title">';
                        echo $contacts_title;
                        echo '</div>';
                    endif;

                    if($contacts_content):
                        echo '<div>';
	                    echo $contacts_content;
                        echo '</div>';
                    endif; ?>
                </div>
                <div class="col-md-4 col-xs-12 info">
	                <?php if($info_title):
		                echo '<div class="title">';
		                echo $info_title;
		                echo '</div>';
	                endif;

	                if($info_content):
		                echo '<div>';
		                echo $info_content;
		                echo '</div>';
	                endif; ?>
                </div>
            </div>
        </footer>

    <?php wp_footer(); ?>

    </body>
</html>
