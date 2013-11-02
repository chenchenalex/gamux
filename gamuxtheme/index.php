<?php get_header(); ?>


<div class="main">
	  <div id="slide">

	  <div id="focus">
		<ul>
		<?php $posts = get_posts( "category=8&numberposts=5" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<?php 
				$szPostContent = $post->post_content; 
				$szSearchPattern = '~<img [^\>]*\ />~';  // 搜索所有符合的图片 
				preg_match_all( $szSearchPattern, $szPostContent, $aPics ); 
				$iNumberOfPics = count($aPics[0]); // 检查一下至少有一张图片
				?>

    				<?php if ( $iNumberOfPics > 0 ) { ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a></li>
    				<?php } else; ?> 
				<div style="display:none;"></div>
					<?php endforeach; ?>			
					<?php endif; ?>
		</ul>
	  <script src="<?php bloginfo('template_directory'); ?>/js/indexlunbo.jquery.js" ></script>

	</div>
	  </div>
 <div class="recbox">
		<div class="tit">游戏新闻
			<a  href="/allFeaturedList">查看全部&gt;</a>
		</div>
<!-------------------------------头条新闻，置顶----------------------------------->
		<a class="headline">
		<?php
               $sticky = get_option('sticky_posts');
               rsort( $sticky );
               $sticky = array_slice( $sticky, 0, 1);
               query_posts( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1,'showposts' => 1,'cat' =>8) );
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
		<?php $posts = get_posts( "category=9&numberposts=8" ); ?>
			<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
	

					<?php endforeach; ?>			
					<?php endif; ?>

		</div>
<!----------------------------------行业新闻--------------------------------------->
		<div class = "rnews">
		<h5>行业新闻</h5>
			<?php $posts = get_posts( "category=10&numberposts=8" ); ?>
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
			<a  href="/allFeaturedList">查看全部&gt;</a>
		
		
		</div>
		<ul class="applist app-push clearfix">
<!--------------------Hot Games List-------------------------->
<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>

<li class="clearfix">
    <a class="applist-img" href="/detail/9180">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/73bd4b6a-5344-4acd-8c19-88fd2a4f048b" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/73bd4b6a-5344-4acd-8c19-88fd2a4f048b" alt="百度音乐播放器">
    </a>
    <div class="app-des">
      <h6><a href="/detail/9180">百度音乐播放器</a></h6>
      <p>影音视听</p>
    </div>
</li>

<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>

<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>

<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>

<!-----------------------热评文章---------------------------->
  
<?php echo popularposts_with_comment(); ?>

		
		
					
			
<!-------------------------HOT GAMES LIST END----------------------------->	
		</ul>
	  </div>
	  <div class="recomend-cen">
	  </div>
	  <div class="recbox">
		<div class="tit">最新游戏
			<a   href="/allFeaturedList">查看全部&gt;</a>
		</div>
		<ul class="applist app-push clearfix">
		<li class="clearfix">
 	   <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
	</li>

	<li class="clearfix">
    <a class="applist-img" href="/detail/13763">
      <img data-src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" 

src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/b8731d8e-a859-4921-b958-e41b94e09a2b" alt="汽车报价大全

">
    </a>
    <div class="app-des">
      <h6><a href="/detail/13763">汽车报价大全</a></h6>
      <p>实用工具</p>
    </div>
</li>

	  </div>
	  <section id="content" class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post" class="row">
			<div class="row">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<div class="row">
		    	<span>作者：<?php the_author(); ?>  <?php the_time('Y年m月d日'); ?></span>
			</div>			
			<div class="row">
			<?php the_content('阅读全文'); ?>
			<?php edit_post_link('编辑', '<span class="edit-link">', '</span>' ); ?>
			</div>
			<div class="row">
			<?php comments_template('', true); ?>
			</div>
		</div>s
		<?php endwhile; ?>
		<?php else: ?>
		<p>抱歉，未找到此文章。</p>
		<?php endif; ?>
	  </section>
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
