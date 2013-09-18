<div class="sidebar">
	<div class="searchbox">
	</div>
	<a href="" class="sidepic" target="_blank">这里放个小图片</a>
	<div class="allapp">
		 <a href="" class="btn-myfile" >
   		 <i class="icons icons-list"></i>所有应用分类
  		 <span class="caret"></span>
 		 </a>
	</div>
	<div class="ranklist">
		<div class="tit">
		<a href=""> 游戏排行榜 >> </a>
		</div>
		<div id="toplist">
		</div>
	</div>

<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'SideBar' ) ) : else : ?>
<?php endif; ?>
</div>