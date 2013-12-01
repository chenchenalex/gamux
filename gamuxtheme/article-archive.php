<?php get_header(); ?>

	<div id ="linuxnews">
	<div id ="newslogo"></div>
	<div id ="newstitle">	
		<h2>Linux 新闻资讯</h2>
	</div>
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<li class="news">
			<div class = "newspic"><img src="<?php echo nosrc_post_thumbnail(); ?>" /></div>
			<div class="newstitle"><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></div>
			<div class="time"><?php the_time('y-m-d'); ?></div>
			<div class="newspre"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 280,'...'); ?>
			</div>
		</li>
	<?php endwhile; ?>
	<?php endif; ?>
	</div>
<?php pagination($query_string); ?>


<?php get_footer(); ?>