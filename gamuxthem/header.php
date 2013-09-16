<?php error_reporting(E_ALL^E_NOTICE); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />

</head>

<body <?php body_class(); ?>>
<div id="navbar">
	<header class="navbar navbar-default" role="navigation">
  	<!-- Brand and toggle get grouped for better mobile display -->
  		<h1>
			<a class="logo" href="<?php echo site_url(); ?>">
      			<?php bloginfo('name'); ?>
    			</a>
		</h1>


		<ul id ="menu" class="menu">
	  		<?php wp_nav_menu( array(
				'theme_location' =>  'header-menu',
				'menu_class' => 'menu'
			) ); ?>
    		</ul>

   
   
	</header>
</div>


  <div id="contentarea" class="container">