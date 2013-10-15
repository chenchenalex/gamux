<?php 


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'SideBar',
		'before_widget' => '<div class="col-lg-12 col-sm-12 col-md-12 col-xs-4">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
        'header-menu' => __( '导航自定义菜单1' ),
                // 还可以在这里添加一些菜单 显示在其他位置
                //footer-menu=>__( '页面底部自定义菜单' ),
    )
    );
}

//添加缩略图功能
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}
//得到缩略图,形式为http://..../xxx.【图片格式】
function nosrc_post_thumbnail() {
	if ( has_post_thumbnail() )
		$img_id=get_post_thumbnail_id();
		$img_url=wp_get_attachment_image_src($img_id);
		$img_url=$img_url[0];
		echo $img_url;
	}

//[页面/分类]别名获取链接
function geturl($slug, $type="page") { //slug
global $wpdb;
if ($type == "page") {
$url_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'");
echo get_permalink($url_id);
}else {
$url_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE slug = '".$slug."'");
echo get_category_link($url_id);
}
}

?>
