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
        <div class="appinfo" id="t1" style="display:block;">
		  <div class="apptab">
		  <div class="tabdes_select"><a href="<?php echo curPageURL(); ?>#" class="ccc" onclick="javascript:show(&#39;t1&#39;);hide(&#39;t2&#39;);">应用介绍</a></div>
		  <div class="tabdownload"><a href="<?php echo curPageURL(); ?>#" onclick="javascript:show(&#39;t2&#39;);hide(&#39;t1&#39;);">游戏下载</a></div>
		  </div>
          <div class="pslide clearfix">    
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); setPostViews(get_the_ID()); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
          </div>
        </div>

         <div id="t2" style="display: none; ">
		  <div class="apptab">
		 <div class="tabdes"><a href="<?php echo curPageURL(); ?>#" onclick="javascript:show(&#39;t1&#39;);hide(&#39;t2&#39;);">应用介绍</a></div>
		   <div class="tabdownload_select"><a href="<?php echo curPageURL(); ?>#" class="ccc" onclick="javascript:show(&#39;t2&#39;);hide(&#39;t1&#39;)">游戏下载</a></div>
		  </div>
			<div class="downloadarea clearfix" id="downarea">
            <div id="deb32"><a href="<?php echo get_post_meta( $post->ID, 'deb_i386', true ); ?>"></a></div>
            <div id="deb64"><a href="<?php echo get_post_meta( $post->ID, 'deb_amd64', true ); ?>"></a></div>
			<div id="debian32"><a href="<?php echo get_post_meta( $post->ID, 'deb_debian_i386', true ); ?>"></a></div>
			<div id="debian64"><a href="<?php echo get_post_meta( $post->ID, 'deb_debian_amd64', true ); ?>"></a></div>
            <div id="rpm32"><a href="<?php echo get_post_meta( $post->ID, 'rpm_x86', true ); ?>"></a></div>
            <div id="rpm64"><a href="<?php echo get_post_meta( $post->ID, 'rpm_x64', true ); ?>"></a></div>
            <div id="tar32"><a href="<?php echo get_post_meta( $post->ID, 'general_x86', true ); ?>"></a></div>
			<div id="tar64"><a href="<?php echo get_post_meta( $post->ID, 'general_x64', true ); ?>"></a></div>
			<div id="steamlink"><a href="<?php echo get_post_meta( $post->ID, 'buysite', true ); ?>"></a></div>
			<div id="baidupan"><a href="<?php echo get_post_meta( $post->ID, 'baiduyun', true ); ?>"></a></div>
			<div><a href="<?php echo get_post_meta( $post->ID, 'other1', true ); ?>"><img src="<?php echo get_post_meta( $post->ID, 'other1_img', true ); ?>" /></a></div>
			<div><a href="<?php echo get_post_meta( $post->ID, 'other2', true ); ?>"><img src="<?php echo get_post_meta( $post->ID, 'other2_img', true ); ?>" /></a></div>
			<script type="text/javascript">

		window.onload =function aa(){
		var obj = document.getElementById("downarea");
		for(var i=0;i<obj.childNodes.length;i++){
			if(obj.childNodes[i].tagName != "DIV") continue;
			if(obj.childNodes[i].childNodes[0].getAttribute('href')==""){
				obj.childNodes[i].style.display = "none";
			}
		}
	}

			</script>
			</div>
            </div>
<script type="text/javascript">
<!--
function show(strtype) {document.all.item(strtype).style.display = "block";}
function hide(strtype) {document.all.item(strtype).style.display = "none";}
-->
</script>

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
      <li><span>版本号：</span><h4 class="baseinfo-vname" title="version"><?php echo get_post_meta( $post->ID, '_version', true ); ?></h4></li>
      <li><span>更新时间：</span><h4><?php the_time('Y-m-d'); ?></h4></li>
<!-----      <li><span>软件大小：</span><h4>93.58 M</h4></li>		--->
      <li><span>开发商：</span><h4 class="baseinfo-developer" title="website"><?php echo get_post_meta( $post->ID, '_website', true ); ?></h4></li>
      
    </ul>
</div>

</div>
<?php get_footer(); ?> 