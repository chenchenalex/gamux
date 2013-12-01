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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<script src="http://libs.baidu.com/jquery/2.0.3/jquery.min.js"></script>
    <?php wp_head(); ?>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon2.ico" />

</head>

<body <?php body_class(); ?>>
<header id="navbar">
	<div class="head">
  	
  		<h1>
			<a class="logo" href="<?php echo site_url(); ?>">
      			<?php bloginfo('name'); ?>
    			</a>
		</h1>
		<div class="menuarea">			
		<ul id ="menu" class="menu">
	  		<?php wp_nav_menu( array(
				'theme_location' =>  'header-menu',
				'menu_class' => 'menu'
			) ); ?>
	    
			
		</ul>
		<ul id ="submenu">
			<li>Wine游戏</li>
			<li>| 网页游戏</li>
		</ul>
		</div>
		<?php if (is_user_logged_in()) { ?>
			<div id="toplogin">
			<div id="usernamelogged"><?php global $current_user;
			get_currentuserinfo();
			echo '用户名: ' . $current_user->user_login . "\n";
			?>
			</div>
			<?php wp_register(); ?>
			<li>
			<a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>" title="">退出登录</a>
			</li>
			</div>
		<?php } else { ?>
		<div id="toplogin" >
            <form name="toplogin" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
				<div>
					<input id="username" type="text" name="log" placeholder="  用户名"  value="<?php esc_html(stripslashes($user_login)) ?>" />
					<input id="password" type="password" name="pwd" placeholder="  密码" />
					<?php do_action( 'login_form' ); ?>
				</div>
            <input id="submit" type="submit" name="submit" value="登录">
            <label id="keepme" for="remenberme"><input name="remenberme" type="checkbox" checked="checked" value="forever" />记住</label>
			<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
			<span><a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">忘记</a></span>
			<span><a href="<?php echo get_option('home'); ?>/wp-login.php?action=register">注册</a></span>
            </form>
        </div>
		<?php } ?>
	</div>
</header>


  <div id="contentarea" class="container clearfix">