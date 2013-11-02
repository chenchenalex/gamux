<?php get_header(); ?>
<div class="main">
    <div class="breadcrumb">
        <a href="<?php bloginfo(url); ?>">首页</a> <span class="divider"> &gt; </span>
        <a href="/game/"><?php if (the_category(', '))  the_category(); ?></a>
        <span class="divider"> &gt; </span><?php the_title(); ?>
    </div>
    <div class="tit"><h1><?php the_title(); ?></h1></div>
    <div class="appintro clearfix">
      <div class="left">
        <div class="img">
<!-- 	  游戏图标 -->
        </div>
     
      </div>
      <div class="right">
        <div class="appinfo">
          <h3>应用介绍</h3>

          <div class="pslide">    
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); setPostViews(get_the_ID()); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
          </div>
        </div>
        
         <div class ="downarea">
            <a id="deb32"></a>
            <a id="deb64"></a>
            <a id="rpm32"></a>
            <a id="rpm64"></a>
            <a  id="tar32"></a>
            </div>
      </div>
    </div>
    <?php comments_template(); ?>
    <div class="detail-pic">
<!--       游戏截图幻灯 -->
    </div>
    
      <div class="recbox">
        <div class="tit">相关应用</div>
          <ul class="applist applist-link clearfix">
<!--             其他游戏推荐 -->

          </ul>
      </div>
</div>    
<div class="sidebar-right">
    
<div class="mod searchbox">
 
</div>
    <div class="tit">基本信息</div>
    <ul class="baseinfo">
      <li><span>游戏名：</span><h4 class="baseinfo-developer" title="com.dragonstudio.dotababy.mi"><?php the_title(); ?></h4></li>
      <li><span>分类：</span><h4><?php the_category(); ?></h4></li>
	  <li><span>其他分类</span><h4><?php get_tags( $tag, $output = 'OBJECT', $filter = 'raw' ); ?></h4></li>
      <li><span>版本号：</span><h4 class="baseinfo-vname" title="1.1.0">参看游戏包名</h4></li>
      <li><span>更新时间：</span><h4><?php the_time('Y-m-d'); ?></h4></li>
<!-----      <li><span>软件大小：</span><h4>93.58 M</h4></li>		--->
      <li><span>开发商：</span><h4 class="baseinfo-developer" title="北京游龙腾信息技术有限公司">见游戏简介</h4></li>
      
    </ul>
</div>

</div>
<?php get_footer(); ?> 
