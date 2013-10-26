<?php get_header(); ?>


	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<li class="title">
		<div class="title"><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></div>
		<div class="time"><?php the_time('y-m-d'); ?></div>
		</li>
	<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>