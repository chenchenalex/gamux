<?php get_header(); ?>


<div class="main">
	  <div id="slide">

	  <div id="focus">
		<ul>
			<li><a href="http://lab.gamux.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/01.jpg" alt="QQ商城焦点图效果下载" /></a></li>
			<li><a href="http://lab.gamux.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/02.jpg" alt="QQ商城焦点图效果教程" /></a></li>
			<li><a href="http://lab.gamux.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/03.jpg" alt="jquery商城焦点图效果" /></a></li>			
		</ul>
	  <?php echo gamux_indexlunbo_jquery(); ?>

	</div>
	  </div>
	  <div class="recbox">
		<div class="tit">热门游戏
			<a href="/allFeaturedList">查看全部&gt;</a>
		</div>
		<ul class="applist app-push clearfix">
		</ul>
	  </div>
	  <div class="recomend-cen">
	  </div>
	  <div class="recbox">
		<div class="tit">最新游戏
			<a href="/allFeaturedList">查看全部&gt;</a>
		</div>
		<ul class="applist app-push clearfix">
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
 </div> <!-- /container -->
<!-- footer begin -->
	<?php get_footer(); ?> 
<!-- footer end -->
