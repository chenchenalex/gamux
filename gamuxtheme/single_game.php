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
		<?php if( $posts ) : ?>
			<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
				
      <img src="<?php echo nosrc_post_thumbnail(); ?>" alt="<?php the_title(); ?>" />
	

					<?php endforeach; ?>			
					<?php endif; ?>
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

         <div class ="downloadarea" id="downloadarea">
            <div id="deb32"><a href=""><img src=""></a></div>
            <div id="deb64"><a href=""></a></div>
			<div id="debian32"><a href="<?php echo get_post_meta( $post->ID, 'deb_debian_i386', true ); ?>"></a></div>
			<div id="debian64"><a href="<?php echo get_post_meta( $post->ID, 'deb_debian_amd64', true ); ?>"></a></div>
            <div id="rpm32"><a href="<?php echo get_post_meta( $post->ID, 'rpm_x86', true ); ?>"></a></div>
            <div id="rpm64"><a href=""></a></div>
            <div id="tar32"><a href=""></a></div>
			<div id="tar64"><a href=""></a></div>
			<div id="steamlink"><a href=""></a></div>
			<div id="baidupan"><a href=""></a></div>
			
			<script type="text/javascript">
			function checkDiv(){
            //我这里简单点用的获取标签名称,如果你的id有规律,循环获取id也OK的
			var obj = document.getElementsByTagName("div");
			for(var i=0; i<obj.length ;i++){
            if(obj[i].childNodes[0].href == ""){
                obj[i].style.display="none";
				}
			}
			}
			</script>
			
            </div>

      </div>
    </div>
    <div class="detail-pic">
	<span class="title_pic"></span>
	<div class="title">
	游戏截图
	</div>
<!--       游戏截图 -->
    </div>
    <span class="singame"><?php comments_template(); ?></span>

    
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