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
            	<li data-tags="Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/1.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/2.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/3.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/4.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/5.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/6.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/7.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/8.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/9.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/10.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/11.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/12.jpg" alt="Illustration" /></li>
                <li data-tags="Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/13.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/14.jpg" alt="Illustration" /></li>
                <li data-tags="Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/15.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/16.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/17.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/18.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/19.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/20.jpg" alt="Illustration" /></li>
                <li data-tags="Web Design,Logo Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/21.jpg" alt="Illustration" /></li>
                <li data-tags="Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/22.jpg" alt="Illustration" /></li>
                <li data-tags="Logo Design,Print Design"><img src="<?php bloginfo('template_directory'); ?>/img/shots/23.jpg" alt="Illustration" /></li>
            </ul>
        </section>
		
	     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>


<?php get_footer(); ?>
