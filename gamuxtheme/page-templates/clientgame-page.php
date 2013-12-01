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
           
 	
　　　<?php $posts = get_posts( "category=6&numberposts=2000" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			<li data-tags="<?php foreach((get_the_category()) as $category) {
    echo $category->cat_name  .',';}?>">
                <a href="<?php the_permalink(); ?>"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-post-thumbnail'); endif; ?>
                </a>
            </li>
	

					<?php endforeach; ?>			
					<?php endif; ?>
            </ul>
        </section>
		<?php pagination($query_string); ?> 
	     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>


<?php get_footer(); ?>