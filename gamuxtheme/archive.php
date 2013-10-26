<?php 
$post = $wp_query->post;
/*取得栏目名称*/
$category = get_the_category();
		$cat_parent = get_cat_name($category[0]->category_parent);
	if (!empty($cat_parent)) {
		$thiscatname = $cat_parent;
	} else {
		$thiscatname = $category[0]->cat_name;
	}
/*取得栏目名称 end*/
if ( $thiscatname=='企业分站' ) { 
include(TEMPLATEPATH . '/article-archive.php'); 
}
else if ( strstr($thiscatname, '新闻') || strstr($thiscatname, '资讯')){ 
include(TEMPLATEPATH . '/article-archive.php'); 
} 

else { 
include(TEMPLATEPATH . '/products-archive.php'); 
} 
?> 