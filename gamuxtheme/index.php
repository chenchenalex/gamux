<?php get_header(); ?>


<div class="main">
	  <div id="slide">

	  <div id="focus">
		<ul>
		<?php $posts = get_posts( "category=14&numberposts=5" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<?php 
				$szPostContent = $post->post_content; 
				$szSearchPattern = '~<img [^\>]*\ />~';  // 搜索所有符合的图片 
				preg_match_all( $szSearchPattern, $szPostContent, $aPics ); 
				$iNumberOfPics = count($aPics[0]); // 检查一下至少有一张图片
				?>

    				<?php if ( $iNumberOfPics >= 1 ) { ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a></li>
    				<?php } ?> 
					<?php endforeach; ?>			
					<?php endif; ?>
		</ul>
	  <script src="<?php bloginfo('template_directory'); ?>/js/indexlunbo.jquery.js" ></script>

	</div>
	  </div>

<div class="recbox">
		<div class="tit">游戏新闻
			<a  href="<?php geturl('news','cat'); ?>">查看全部&gt;</a>
		</div>
<!-------------------------------头条新闻，置顶----------------------------------->
		<a class="headline">
		<?php
               $sticky = get_option('sticky_posts');
               rsort( $sticky );
               $sticky = array_slice( $sticky, 0, 1);
               query_posts( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1,'showposts' => 1,'cat' =>14) );
               ?>
               <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
	       <a href="<?php the_permalink(); ?>" target="_blank"><h2>[头条]<?php the_title(); ?></h2></a>
               <?php endwhile; ?>
               <?php else : ?><p class="center">没有数据。</p>
               <?php endif; ?>
		
		</a>
		<ul class="newslist  clearfix">
<!-----------------------------------本站新闻--------------------------------------->
		<div class = "lnews">
		<h5>本站新闻</h5>
		<?php $posts = get_posts( "category=49&numberposts=8" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
	

					<?php endforeach; ?>			
					<?php endif; ?>

		</div>
<!----------------------------------行业新闻--------------------------------------->
		<div class = "rnews">
		<h5>业界新闻</h5>
			<?php $posts = get_posts( "category=50&numberposts=8" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
	

					<?php endforeach; ?>			
					<?php endif; ?>
		</div>
		</ul>
</div>


	  
	  <div class="recbox">
		<div class="tit">热门游戏
			
		</div>
		<ul class="applist app-push clearfix">
<!--------------------Hot Games List-------------------------->
<?php
/*<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>*/
//一个例子而已
?>


<!-----------------------热门文章函数---------------------------->
  
<?php echo ashu_get_hotpost(16); ?>
		
		
					
			
<!-------------------------HOT GAMES LIST END----------------------------->	
		</ul>
	  </div>

	  <div class="recbox">
		<div class="tit">最新游戏
		</div>
		<ul class="applist app-push clearfix">

<?php $posts = get_posts( "category=array(6,7,8,9)&numberposts=8" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<li class="clearfix">
    <a class="applist-img" href="<?php the_permalink(); ?>">
      <img data-src="<?php echo nosrc_post_thumbnail(); ?>" 

src="<?php echo nosrc_post_thumbnail(); ?>" alt="<?php the_title(); ?>">
    </a>
    <div class="app-des">
      <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
      <p style="width:70px;overflow:hidden;">

    <?php
    foreach((get_the_category()) as $category) {
    echo $category->cat_name  .' ';
    }
    ?>
</p>
    </div>
</li>
	

					<?php endforeach; ?>			
					<?php endif; ?>
<!---------------------------------最新游戏结束------------------------------------->
	  </div>

</div>
<!-- main end -->
<!-- right sidebar begin -->
	<?php get_sidebar(); ?>
<!-- sidebar end -->
</div>
  <!-- /container -->
<!-- footer begin -->
	<?php get_footer(); ?> 
<!-- footer end -->