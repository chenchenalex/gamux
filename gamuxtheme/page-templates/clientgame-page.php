<?php
/**
 * Template Name: 客户端游戏页面模板
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/clientgame.css" />
        
        <nav id="filter"></nav>

        <section id="container">
        	<ul id="stage">
           <li data-tags="aaa,aaab"><img src="<?php bloginfo('template_directory'); ?>/img/shots/21.jpg" alt="Illustration" /></li>
 	
　　　<?php $posts = get_posts( "category=4&numberposts=8" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			<li data-tags="<?php
    foreach((get_the_category()) as $category) {
    echo $category->cat_name  .' ,';
    }
    ?>"><img src="<?php bloginfo('template_directory'); ?>/img/shots/21.jpg" alt="Illustration" /></li>
	

					<?php endforeach; ?>			
					<?php endif; ?>
            </ul>
        </section>
		
	     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>


<?php get_footer(); ?>