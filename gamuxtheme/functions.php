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
	add_theme_support( 'post_thumbnails', array( 'post' ) );
}
set_post_thumbnail_size( 155, 110, true ); // 设置默认的缩略图大小尺寸
add_image_size( 'one', 155, 110, true ); // 设置标记为"one"的缩略图尺寸，这里的one应该是数组下标
add_image_size( 'two', 350, 248, true );
add_image_size( 'big', 546, 387, true );

//添加第二个缩略图
require_once('lib/multi-post-thumbnails.php');
if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(
    array(
     'label' => '第二个特色图片',
     'id' => 'second-post-thumbnail',
     'post_type' => 'post'
     )
  );
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

//获得文章第一张图片
function catch_that_image() {

      global $post, $posts;

      $first_img = '';

      ob_start();

      ob_end_clean();

      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

      $first_img = $matches [1] [0];

      if(empty($first_img)){ //Defines a default image

        $first_img = "/images/default.jpg";

      }

      return $first_img;

    }

/*---------------------------设置文章浏览次数，然后调用显示热门文章-----------------------------*/
/*---------设置浏览次数-----------*/
//获取浏览数-参数文章ID   
function getPostViews($postID){   
    //字段名称   
    $count_key = 'post_views_count';   
    //获取字段值即浏览次数   
    $count = get_post_meta($postID, $count_key, true);   
    //如果为空设置为0   
    if($count==''){   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
        return "0";   
    }   
    return $count;   
}   
//设置浏览数-参数文章ID   
function setPostViews($postID) {   
    //字段名称   
    $count_key = 'post_views_count';   
    //先获取获取字段值即浏览次数   
    $count = get_post_meta($postID, $count_key, true);   
    //如果为空就设为0   
    if($count==''){   
        $count = 0;   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
    }else{   
        //如果不为空，加1，更新数据   
        $count++;   
        update_post_meta($postID, $count_key, $count);   
    }   
}
/*-----------设置浏览次数结束--------------*/
/*------------调用显示热门文章-------------*/

    function ashu_get_hotpost($post_num=16){
    global $wpdb,$post;
 		$result = $wpdb->get_results("
 			SELECT post_content,post_id,meta_key,meta_value,ID,post_title 
 			FROM $wpdb->postmeta key1 
 			INNER JOIN $wpdb->posts key2 ON key1.post_id = key2.ID 
 			WHERE key2.post_type='post' 
 			AND key2.post_status='publish' 
 			AND key1.meta_key='post_views_count'

 			AND post_status = 'publish'
 			ORDER BY CAST(key1.meta_value AS SIGNED) DESC LIMIT 0 , $post_num");
    foreach ($result as $post) {
    setup_postdata($post);  
    $output .= '<li class="clearfix">
    					<a class="applist-img" href="'.get_permalink().'">'.get_the_post_thumbnail().'</a>
    					<div class="app-des">
    					<h6><a href="'.get_permalink().'">'.get_the_title(). '
    					</a></h6>
    					<p>浏览次数:'.getPostViews(get_the_ID()).'
    					</p></div></li>';
    }

    echo $output;
    }
/*----------------------------------------------------------------END-------------------------------------------------------------*/

/*------------------------按评论设置热门文章----------------------*/
function get_the_thumbnail($postmeta_post_id){
	
}
function popularposts_with_comment($posts_num=10,$days=7,$display=ture) {
	global $wpdb,$post;	
	$output = '';      
    $most_comment = $wpdb->get_results("
		SELECT ID , post_title , comment_count ,guid
		FROM $wpdb->posts
		WHERE post_type = 'post' AND TO_DAYS(now()) - TO_DAYS(post_date) < $days 
		ORDER BY comment_count DESC LIMIT 0 , $posts_num ");

    	foreach ($most_comment as $post) {
    		$post_title = get_the_title();
			//$post_title = $post->post_title;(也可以)
    		$post_views = getPostViews($postID);
    		$output .= '<li class="clearfix">
    					<a class="applist-img" href="'.get_permalink().'">'.get_the_thumbnail($postmeta_post_id).'</a>
    					<div class="app-des">
    					<h6><a href="'.get_permalink().'">'.$post_title. '
    					</a></h6>
    					<p>浏览次数:'.getPostViews(get_the_ID()).'
    					</p></div></li>';
    	}
    	echo $output;
}


/*
$termId:分类目录ID,为0时是检索所有分类目录
$posts_num:显示热评文章的数量
$days:检索多少天内的热评文章
*/
// 获得热评文章
function simple_get_most_review($termId=0,$posts_num=10, $days=7)
{
global $wpdb;
//所有热评文章
if($termId==0){
$sql = "SELECT 'ID' , 'post_title' , 'comment_count' FROM $wpdb->posts
WHERE post_type = 'post'
ORDER BY 'comment_count' DESC LIMIT 0 , $posts_num ";
}
//AND TO_DAYS(NOW()) - TO_DAYS(post_date) < $days
//AND ('wp_posts'.'post_status' = 'publish' OR 'wp_posts'.'post_status' = 'inherit')     在上面计算天数的，但是有错误
 
//分类热评文章
else {
$sql="SELECT 'ID' , 'post_title' , 'comment_count'  FROM 'wp_posts'
INNER JOIN 'wp_term_relationships' ON 'wp_posts'.'ID' = 'wp_term_relationships'.'object_id'
INNER JOIN 'wp_term_taxonomy' ON 'wp_term_relationships'.'term_taxonomy_id' =  'wp_term_taxonomy'.'term_taxonomy_id'
WHERE 'wp_term_taxonomy'.'taxonomy' = 'category'
AND 'wp_term_taxonomy'.'term_id' = $termId
AND 'wp_posts'.'post_type' = 'post'
GROUP BY 'wp_posts'.'ID'
ORDER BY 'comment_count' DESC LIMIT 0 , 10  ";
}
$posts = $wpdb->get_results($sql);
$output = "";
foreach ($posts as $post){
$title = $post->post_title;
$output .= '<li class="clearfix">
    					<a class="applist-img" href="'.get_permalink().'">'.get_the_post_thumbnail().'</a>
    					<div class="app-des">
    					<h6><a href="'.get_permalink().'">'.get_the_title(). '
    					</a></h6>
    					<p>浏览次数:'.getPostViews(get_the_ID()).'
    					</p></div></li>';
}
echo $output;
}

/*调用方法：
所有分类热评文章：
<?php if (function_exists('simple_get_most_review')) {simple_get_most_review(0,10,31); }  ?>
单个分类文章热评：
<?php if (function_exists('simple_get_most_review')) {simple_get_most_review($category->term_id,10,31); }  ?>
id换成分类id
*/

?>
