    <?php
    $post = $wp_query->post;

$category = get_the_category();
		$cat_parent = get_cat_name($category[0]->category_parent);
	if (!empty($cat_parent)) {
		$thiscatname = $cat_parent;
	} else {
		$thiscatname = $category[0]->cat_name;
	}
/*取得栏目名称 end*/
if ( $thiscatname=='新闻资讯' ) { 
include(TEMPLATEPATH . '/single_news.php'); 
}

  else { 
        include(TEMPLATEPATH . '/single_game.php');
    }

    ?>