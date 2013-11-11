<?php
/**
 * Template Name: 模拟器游戏模板
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
</div>
<div id ="ubuntucontainer">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/emulator-page.css" />
<!-- 顶部状态栏开始  -->
<div id="top" class="dropShadow">
			<div id="top-left">
				<div id="control-buttons">
					<div id="close"></div>
					<div id="min"></div>
					<div id="max"></div>
				</div>
				<div id="dash-control-buttons">
					<div class="close"></div>
					<div class="min"></div>
					<div class="max"></div>
				</div>
				<div id="title"></div>
			</div>
			<div id="top-right">
				<div id="message"><img src="<?php bloginfo('template_directory'); ?>/img/top/nomessage.jpg" class="message-logo" alt="" />
					<ul class="drop-down">
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/available.jpg" alt=""/> 在线
						</li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/away.jpg" alt=""/> 离开
						</li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/busy.jpg" alt=""/> 忙碌
						</li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/invisible.jpg" alt=""/> 隐身
						</li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/offline.jpg" alt=""/> 离线
						</li>
						<li class="divider"></li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/chat.png" alt=""/> 聊天
						</li>
						<li class="divider"></li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/broadcast.png" alt=""/> 设定社交网络帐号…
						</li>
						<li class="divider"></li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/mail.png" alt=""/> 设置电子邮箱...
						</li>
						<li class="divider"></li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/uone.png" alt=""/> Ubuntu One
						</li>
						<li class="divider"></li>
						<li class="disabled">
							清空
						</li>
					</ul>
				</div>
				<div id="bluetooth"><img src="<?php bloginfo('template_directory'); ?>/img/top/bluetooth.png" alt=""/>
					<ul class="drop-down">
						<li class="disabled bluetooth">
							打开蓝牙
						</li>
						<li>
							关闭蓝牙
						</li>
						<li class="divider"></li>
						<li class="disabled BtOn">
							可见
						</li>
						<li class="divider BtOn"></li>
						<li class="disabled BtOn">
							发送文件到设备...
						</li>
						<li class="disabled BtOn">
							浏览设备上的文件...
						</li>
						<li class="divider"></li>
						<li class="disabled BtOn">
							设置新设备...
						</li>
						<li class="divider BtOn"></li>
						<li class="disabled">
							首选项
						</li>
					</ul>
				</div>
				<div id="connection"><img src="<?php bloginfo('template_directory'); ?>/img/top/connection.png" alt=""/>
					<ul class="drop-down">
						<li class="disabled">
							自动 eth0
						</li>
						<li class="disabled">
							断开
						</li>
						<li class="divider"></li>
						<!--<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/wireless-icon.png" alt=""/> My Wireless Connection</li>
						<li class="disabled">断开</li>
						<li class="divider"></li>-->
						<li class="disabled">
							连接信息
						</li>
						<li class="disabled">
							编辑连接...
						</li>
					</ul>
				</div>
				<div id="speakers"><img src="<?php bloginfo('template_directory'); ?>/img/top/speakers3.png" class="speakers-logo"  alt=""/>
					<ul class="drop-down">
						<li>
							静音
						</li>
						<li class="system-volume">
							<div class="large-icon"></div><div class="small-icon"></div><div class="slider"></div><div class="slider-active"></div>
						</li>
						<li class="divider"></li>
						<li class="disabled"><img src="<?php bloginfo('template_directory'); ?>/img/top/rhythmbox.png" alt=""/> Rhythmbox
						</li>
						<li class="banshee">
							<div class="banshee-rewind"></div><div class="banshee-forward"></div><div class="banshee-play"></div>
						</li>
						<li class="divider"></li>
						<li class="disabled">
							声音设定...
						</li>
					</ul>
				</div>
				<div id="time">
					<p></p>
					<ul class="drop-down">
						<li class="system-calendar"></li>
						<li class="divider"></li>
						<li class="disabled">
							时间设置...
						</li>
					</ul>
				</div>
				<div id="power"><img src="<?php bloginfo('template_directory'); ?>/img/top/power.png"  alt=""/>
					<ul class="drop-down">
						<li class="disabled">
							系统设置...
						</li>
						<li class="disabled">
							显示...
						</li>
						<li class="disabled">
							启动应用程序...
						</li>
						<li class="disabled">
							软件已为最新
						</li>
						<li class="divider"></li>
						<li class="disabled">
							已连接的设备
						</li>
						<li class="disabled">
							打印机
						</li>
						<li class="divider"></li>
						<li class="disabled">
							锁定屏幕
						</li>
						<li class="disabled">
							注销...
						</li>
						<li class="disabled">
							待机
						</li>
						<li class="disabled">
							休眠
						</li>
						<li>
							关机...
						</li>
					</ul>
				</div>
			</div>
		</div>


<!-- 顶部状态栏结束，左边任务栏开始  -->
<div id="umenu">
			<ul>
				<li class="dash">
					<span>主面板</span><img src="<?php bloginfo('template_directory'); ?>/img/menu/selected-arrow.png" class="selected-window-arrow" alt=""/>
				</li>
				<li class="home"><img src="<?php bloginfo('template_directory'); ?>/img/menu/open-arrow.png" class="open-arrow" alt=""/><span>主文件夹</span><img src="<?php bloginfo('template_directory'); ?>/img/menu/selected-arrow.png" class="selected-window-arrow" alt=""/>
				</li>
				<li class="firefox"><img src="<?php bloginfo('template_directory'); ?>/img/menu/open-arrow.png" class="open-arrow" alt=""/><span>Firefox 网络浏览器</span><img src="<?php bloginfo('template_directory'); ?>/img/menu/selected-arrow.png" class="selected-window-arrow" alt=""/>
				</li>
				<li class="software"><img src="<?php bloginfo('template_directory'); ?>/img/menu/open-arrow.png" class="open-arrow" alt=""/><span>Ubuntu 软件中心</span><img src="<?php bloginfo('template_directory'); ?>/img/menu/selected-arrow.png" class="selected-window-arrow" alt=""/>
				</li>
				<li class="writer"><img src="<?php bloginfo('template_directory'); ?>/img/menu/open-arrow.png" class="open-arrow" alt=""/><span>LibreOffice 文字处理</span><img src="<?php bloginfo('template_directory'); ?>/img/menu/selected-arrow.png" class="selected-window-arrow" alt=""/>
				</li>
				
			</ul>
		</div>
<!-- 任务栏结束 -->
</div>
<?php get_footer(); ?>
