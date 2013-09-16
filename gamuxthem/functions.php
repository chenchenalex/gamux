<?php 
/** deader.php **/
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


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


?>
