<?php get_header(); ?>
<div class="main">
    <div class="breadcrumb">
        <a href="<?php bloginfo(url); ?>">首页</a> <span class="divider"> &gt; </span>
        <a href="/game/"><?php if (the_category(', '))  the_category(); ?></a>
        <span class="divider"> &gt; </span><?php the_title(); ?>
    </div>
    <div class="newstit"><h1><?php the_title(); ?></h1></div>
   
        <div class="newscontent">
        
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
         
        </div>
        
        
    
  
   
    <?php comments_template(); ?>

  </div>
<div class="sidebar-right">
    
	<div class="mod searchbox"> 
	</div>

         <div class="tit">其他新闻</div>
   	 <ul class="baseinfo">
      		<li><?php the_title(); ?></li>   
   	 </ul>
	</div>
</div>
</div>
<?php get_footer(); ?> 