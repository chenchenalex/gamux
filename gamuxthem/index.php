<?php get_header(); ?>
<div class="row">
<div class="main">
	<div id="slide">
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
		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<p>抱歉，未找到此文章。</p>
		<?php endif; ?>
	</section>
</div>
<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?> 