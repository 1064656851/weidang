<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/show_download.html";i:1589940130;s:75:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/comment.html";i:1586166819;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- import CSS -->
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
  <link rel="stylesheet" href="/new/css/comming.css">
  <link rel="stylesheet" href="/new/css/icon/iconfont.css">
  <script src="/new/css/icon/iconfont.js"></script>
  <script src="/new/js/index.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $__ARCHIVES__['title']; ?></title>
</head>
<body>
	<style>
		
		/* .center_Introduction img{width: 760px;height: 300px;margin:50px 0px 50px 231px ;} */
		.small img{width: 7.6rem;height: 3rem;margin:0.5rem 0px 0.5rem 2.31rem ;}
			.el-carousel__item h3 {
			    color: #475669;
			    font-size: 0.14rem;
			    opacity: 0.75;
			    line-height: 1.5rem;
			    margin: 0;
			  }
			.block{width: 7.6rem;height: 3rem;}
			  
		.head .head_nav{width: 14.42rem;height: 0.32rem;background: #f8faff;display: flex;line-height: 0.32rem;font-size: 0.1rem;}
		.head .head_nav span{color: #5479f3;font-size: 0.1rem;}
		.head .head_nav ul{margin: 0;margin-left: 4rem;padding: 0;margin-right: 1.6rem;}
		.head .head_nav ul li{float: left;}
		.head_nav_last{margin-right: 1.4rem;position: absolute;right: 0;top: 0;}
		.head_nav_first{margin-left: 1.1rem;float: left;}
		.head .head_list{width: 14.42rem;height: 0.7rem;border-bottom: 2px solid #f7f8ff;line-height: 0.7rem;display: flex;justify-content: space-between;}
		.head_list img{width: 2.3rem;height: 0.60rem;float: left;margin-left: 1.1rem;}
		.head_list ul li{float: left;margin-right: 0.3rem;}
		.head_list ul{height: 0.7rem;margin: 0;}
		.head_list span{color: #337dfb;font-size: 0.28rem;float: right;margin-right: 1.4rem;}
		
		
		
			.center{width: 12.22rem;padding: 0 1.1rem;min-height: 5rem;}
			.center .center_nav ul{display: flex;justify-content: space-around;background: #f8faff;height: 0.5rem;margin: 0;line-height: 0.5rem;}
			.center .center_nav .center_nav_hover{color: #5c7ff3;}
			.center_nav_first{height: 0.75rem;line-height: 0.75rem;}
			.center_nav_first a{text-decoration: none;color: #8d97a1;}
			.center_nav_first span,.center_nav_first i{font-size: 0.14rem;}
			.center_log{height: 0.9rem;box-shadow: #ecebfa 5px 5px 5px 5px;position: relative;padding: 0.3rem;}
			.center_log .center_log_aq{width: 0.7rem;height: 0.7rem;position: absolute;right: 0;top: 0;}
			.center_log_first,.center_log_last{float: left;}
			.center_log_first{margin-right: 0.5rem;}
			.center_log_first img{width: 0.6rem;height: 0.6rem;}
			.center_log_first p{margin: 0;font-size: 1px;text-align: center;}
			.center_log_last h3{margin: 0;display: flex;font-size: 0.16rem;width: 10rem;justify-content: space-between;line-height: 0.22rem;margin-top: 0.3rem;}
			.center_log_last_div{width: 0.85rem;height: 0.12rem;background: #3964f0;margin-top: 5px;}
			.center_log_last .icon{color: #fcc25f;}
			.center_log_last p{margin: 0;font-size: 0.24rem;color: #596673;}
			
			.center_msg{height: 4rem;margin-top: 0.4rem;}
			.center_msg p{margin: 0;font-size: 0.28rem;margin-bottom: 0.35rem;}
			.center_msg .center_msg_left{width: 7rem;height: 4rem;float: left;position: relative;}
			.center_msg .center_msg_last{width: 3.2rem;height: 2.7rem;float: left;margin-left: 0.4rem;}
			.center_msg_left .center_msg_left_a{margin: 0;padding: 0;}
			.center_msg_left .center_msg_left_a li{width: 3.5rem;float: left;margin-bottom: 0.4rem;}
			
			.center_msg_left_b{display: flex;justify-content: space-around;margin: 0;padding: 0;position: absolute;bottom: 0;margin-top: 0.5rem;}
			.center_msg_left_b li{width: 1rem;text-align: center;background: #eef0f6;border-radius: 0.5rem;margin-right: 0.1rem;}
			
			
			.center_msg_last img{width: 0.5rem;height: 0.5rem;border-radius: 50%;float: left;}
			.center_msg_last_msg{float: left;margin-left: 0.1rem;position: relative;}
			.center_msg_last_msg_wrap{width: 4rem;height: 0.5rem;}
			.center_msg_last_msg_wrap .icon-vip{background: #f6a631;color: #fff;border-radius: 0.4rem;padding: 2px;font-size: 0.16rem;}
			
			.center_msg_last ul{margin: 0;padding: 0;margin-top: 0.2rem;}
			.center_msg_last ul li{margin: 0.1rem 0;}
			.center_msg_last ul li img{width: 0.2rem;height: 0.2rem;}
			.center_Introduction p{font-size: 0.28rem;}
			/* .center_Introduction img{width: 760px;height: 300px;margin:50px 0px 50px 231px ;} */
			.vant-lbt img{width: 7.6rem;height: 3rem;margin:0.5rem 0px 0.5rem 2.31rem ;}
			.center_Introduction div{width: 12.22rem;margin: auto;}
			
			.center_related p{font-size: 0.28rem;}
			.center_related img{width: 2.18rem;height: 1.2rem;}
			.center_related ul{display: flex;}
			.center_related ul li{margin: 5px;}
			
			
			.center_information{height: 4.4rem;}
			
			.center_information img{width: 0.9rem;height: 0.7rem;margin-right: 0.1rem;}
			
			
			.center_information ul{margin: 0;padding: 0;float: left;margin-right: 0.5rem;}
			.center_information p{margin: 0;font-size: 0.28rem;}
			.center_information_first{height: 3.8rem;float: left;}
			
			.center_information_first_img{float: left;}
			.center_information_first_span{color: #bcc1c6;}
			.center_information_last .icon{font-size: 0.16rem;}
			.center_information_last{height: 3.8rem;float: left;}
			.center_information_last img{width: 0.2rem;height: 0.2rem;}
			.center_information_last ul{margin: 0;}
			
			
			.center_information_last .center_information_last_img{width: 0.6rem;height: 0.6rem;margin-left: 0.1rem;float: left;}
			
			.icon_hover{color: #fcc25f;}
			
			.center_link{padding: 0 1.1rem;}
			
			.center_download{width: 12.22rem;padding: 0 1.1rem;}
			.center_download_a{display: flex;width: 12.22rem;justify-content: space-between;margin: 0.5rem 0;}
			.center_download_a .icon{color: #fff;background: #3964f0;padding: 2px;border-radius: 5px;}
			.center_download p{font-size: 0.28rem;}
			
			.center_download_b ul{margin: 0;padding: 0;display: flex;justify-content: space-between;}
			.center_download_b ul li{text-align: center;background: #eef0f6;border-radius: 0.5rem;}
			
			.center_talk{margin: 0.25rem 0;}
			.center_talk span{font-size: 0.28rem;}
			
			.center_talk textarea{width: 12.22rem;height: 1.5rem;border:  1px solid #d9dcdf;border-radius: 0.1rem;margin-top: 0.1rem;}
			
			.center_talk_from{height: 0.3rem;display: flex;}
			
			.center_talk_from .btn{width: 1.5rem;height: 0.4rem;color: #fff;background: #3964f0;border-radius: 0.5rem;margin-right: 0.1rem;}
			.center_talk_from span{font-size: 0.16rem;line-height: 0.4rem;}
			.center_talk_from img{height: 0.4rem;margin-left: 0.1rem;}
			.center_talk_from .txt{border: 1px solid #ccc;border-radius: 5px;height: 0.38rem;}
			
			
			
			.center_talk_from_list img{width: 0.5rem;height: 0.5rem;border-radius: 50%;margin: 0 0.2rem;}
			.center_talk_from_list ul{margin: 0;padding: 0;}
			.center_talk_from_list ul li{display: flex;border-bottom: 1px solid #ccc;padding: 0.2rem 0;position: relative;}
			.center_talk_from_list .center_talk_from_list_p{font-size: 0.16rem;margin: 0;margin-top: 0.1rem;}
			.center_talk_from_list .center_talk_from_list_span{font-size: 0.16rem;}
			.center_talk_from_list i{font-size: 0.14rem;color: #b3b8be;}
			
			.center_talk_from_list_div{position: absolute;right: 0;}
			.center_talk_from_list_div .icon{font-size: 0.16rem;}
			.center_talk_from_list_div i{margin-left: 0.4rem;}
			
			.center_talk_from_list .center_talk_all{font-size: 0.16rem;color: #7691e8;text-align: center;}
		


			
			.center_nav li a{
			text-decoration: none;color: #8d97a1;
		}
		.center_nav li a:hover{
			color: navy;text-decoration:underline;
		}
		.center_msg_left_a a{text-decoration: none;color: #8d97a1;}
		
	</style>
  <div id="app">
  	<div class="head">
  		<div class="head_nav">
  			<div class="head_nav_first">
  				<span class="icon iconfont icon-xiaoxi"></span>
  				<i>欢迎访问</i>
  				<span>微当软件！</span>
  			</div>
  			<ul>
  				<li>
  					<span class="icon iconfont icon-zuijinyuedu"></span>
  					<i>最近更新</i>
  					&nbsp;
  				</li>
  				<li>
  					<span class="icon iconfont icon-paixing"></span>
  					<i>下载排行</i>&nbsp;
  				</li>
  				<li>
  					<span class="icon iconfont icon-daohang"></span>
  					<i>安全导航</i>&nbsp;
  				</li>
  				<li>
  					<span class="icon iconfont icon-tubiao_tijiao"></span>
  					<i>软件提交</i>
  				</li>
  			</ul>
  			<div class="head_nav_last">
  				<span class="icon iconfont icon-wodeqianfenleishouye"></span>
  				<span>登陆&nbsp;｜</span>
  				<span>注册</span>
  			</div>
  		</div>
  		<div class="head_list">
  			<img src="/new/img/logo.png" alt="">
  			<ul>
  				<li>首页</li>
  				<li style="border-bottom: 2px solid #3964f0;">PC软件</li>
  				<li>MAC软件</li>
  				<li>安卓软件</li>
  				<li>软件专题</li>
  				<li>游戏库</li>
  				<li>教程咨询</li>
  			</ul>
  			<span class="icon iconfont icon-sousuo"></span>
  		</div>
  	</div>
  	
  	
  	<div class="center">
  		<div class="center_nav">
			<ul>
				<li class="center_nav_hover">全部</li>
				<li><a href="#">文件收藏</a></li>
				<li><a href="#">打字办公</a></li>
				<li><a href="#">媒体传播</a></li>
				<li><a href="#">养生日子</a></li>
				<li><a href="#">圆形软件</a></li>
				<li><a href="#">图像录制</a></li>
				<li><a href="#">娱乐影音</a></li>
				<li><a href="#">游戏模拟</a></li>
			</ul>
  			<div class="center_nav_first">
  					<span style="color: #b5bac0;">您现在的位置：</span><i>
                    <!-- S 面包屑导航 -->
                    <?php $__5CJTnVgOt0__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__5CJTnVgOt0__) || $__5CJTnVgOt0__ instanceof \think\Collection || $__5CJTnVgOt0__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__5CJTnVgOt0__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a> -
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__5CJTnVgOt0__; ?>
                    软件详情
                    <!-- E 面包屑导航 -->
                      </i>
  			</div>
  			<div class="center_log">
  				<img class="center_log_aq" src="/new/img/11aq.png" alt="">
  				<div>
  					<div class="center_log_first">
  						<img src="<?php echo cdnurl($__ARCHIVES__['image']); ?>" alt="">
  						<p><?php echo substr($__ARCHIVES__['title'],0,5); ?></p>
  					</div>
  					
  					<div class="center_log_last">
  						<p><?php echo $__ARCHIVES__['title']; ?></p>
  						<h3>
							
  							
  							<div>
  								<span>评分：</span>
  								<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  								<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  								<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  								<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  								<span class="icon iconfont icon-wujiaoxing-"></span>
  							</div>
  							<div style="display: flex;">
  								<span class="icon iconfont icon-dianzan"></span>
  								&nbsp;
  								<div class="center_log_last_div">
  									
  								</div>
  								&nbsp;
  								<?php echo $__ARCHIVES__['likes']; ?>&nbsp;
  							</div>
  						</h3>
  					</div>
  				</div>
  			</div>
  		</div>
  		
  		
  		<div class="center_msg">
  			<div class="center_msg_left">
  				<p>详细信息</p>
  				<ul class="center_msg_left_a">
  					<li>软件类型：<a href="<?php echo $__CHANNEL__['url']; ?>" class="link" itemprop="category"><?php echo $__CHANNEL__['name']; ?></a></li>
  					<li>运行环境：<?php echo $__ARCHIVES__['os_text']; ?></li>
  					<li>最新版本：<?php echo $__ARCHIVES__['version']; ?></li>
  					<li>文件大小：<?php echo $__ARCHIVES__['filesize']; ?></li>
  					<li>更新日期：<?php echo date('Y-m-d',$__ARCHIVES__['publishtime']); ?></li>
  					<li>软件语言：<?php echo $__ARCHIVES__['language_text']; ?></li>
  					<li>浏览次数：<?php echo $__ARCHIVES__['views']; ?></li>
  				</ul>
  				<ul class="center_msg_left_b">
                    <?php if(is_array($__ARCHIVES__['tagslist']) || $__ARCHIVES__['tagslist'] instanceof \think\Collection || $__ARCHIVES__['tagslist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__ARCHIVES__['tagslist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><li><a style="text-decoration: none;color: #8D97A1;" href="<?php echo $tag['url']; ?>" itemprop="keywords" class="tag" rel="tag"><?php echo $tag['name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  				</ul>
  			</div>
  			
  			
  			<div class="center_msg_last">
  				<p>其他信息</p>
  				<div class="center_msg_last_msg_wrap">
  					<img src="<?php echo cdnurl($__ARCHIVES__['user']['avatar']); ?>" alt="">
  					<div class="center_msg_last_msg">
  						<i>软件作者：<?php echo $__ARCHIVES__['user']['nickname']; ?> </i><span class="icon iconfont icon-vip">已认证</span>
  						<br>
						  <i>发布作品：21</i><span style="color: #3964f0;"> &nbsp;<a style="color:#3964f0;text-decoration: none; " href="<?php echo $__ARCHIVES__['user']['url']; ?>">TA的个人主页></a>	</span>
  					</div>
  				</div>
  				<ul>
					 
					<?php $__hGVUojiKdq__ = \addons\cms\model\Block::getBlockList(["id"=>"item","name"=>"downloadfocus","limit"=>"2,5"]); if(is_array($__hGVUojiKdq__) || $__hGVUojiKdq__ instanceof \think\Collection || $__hGVUojiKdq__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hGVUojiKdq__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
  					<li>
						<a style="color: #8d97a1;text-decoration: none;" href="<?php echo $item['url']; ?>">
  						<img src="<?php echo $item['image']; ?>" alt="">
  						&nbsp;
						  <?php echo $item['title']; ?>
						</a>
					  </li>
					  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hGVUojiKdq__; ?>
  				</ul>
  			</div>
  		</div>
  		
  		
  		
  		
  		<div class="center_Introduction">
  			<p>软件简介</p>
  			<span><?php echo $__ARCHIVES__['content']; ?></span>
  			<div>
  				<!-- <img src="/new/img/11banner.png" alt=""> -->
  				<!-- <van-swipe :autoplay="3000" indicator-color="white" class='vant-lbt'>
  				  <van-swipe-item><img src="/new/img/jy1.png" ></van-swipe-item>
  				  <van-swipe-item><img src="/new/img/jy2.jpg" ></van-swipe-item>
  				  <van-swipe-item><img src="/new/img/jy3.jpg" ></van-swipe-item>
  				  
  				</van-swipe> -->
  				
  				 <div class="block">
  				    
  				    <el-carousel trigger="click" height="3rem">
  				      <el-carousel-item >
  				        <h3 class="small"><img src="/new/img/jy1.png" ></h3>
						
  				      </el-carousel-item>
					  <el-carousel-item >
					    <h3 class="small"><img src="/new/img/jy2.jpg" ></h3>
					  						
					  </el-carousel-item>
					  <el-carousel-item >
					    <h3 class="small"><img src="/new/img/jy3.jpg" ></h3>
					  						
					  </el-carousel-item>
  				    </el-carousel>
  				  </div>
  				  
  			</div>
  		</div>
  		
  		<div class="center_Introduction">
  			<p>软件提示</p>
  			<span>这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错这个软件非常不错</span>
  		</div>
  		
  		<div class="center_related">
  			<p>相关专题</p>
  			<ul>
  				<li><img src="/new/img/11zt.png" alt=""></li>
  				<li><img src="/new/img/11zt.png" alt=""></li>
  				<li><img src="/new/img/11zt.png" alt=""></li>
  				<li><img src="/new/img/11zt.png" alt=""></li>
  				<li><img src="/new/img/11zt.png" alt=""></li>
  			</ul>
  		</div>
  		
  		
  		<div class="center_information">
  			<div class="center_information_first">
  				<p>相关资讯</p>
  				<ul>
  					<li>
  						<span style="color: #596673;">黑纱hello中关闭系统自动交易能...</span>
  						<div style="width: 2.5rem;height: 0.7rem;">
  							<img class="center_information_first_img" src="/new/img/Software%20project.png" alt="">
  							<span class="center_information_first_span">黑纱的一个用户在使用黑纱的一个用户在使用黑纱的</span>
  						</div>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  				</ul>
  				<ul>
  					<li>
  						<span style="color: #596673;">黑纱hello中关闭系统自动交易能...</span>
  						<div style="width: 2.5rem;height: 0.7rem;">
  							<img class="center_information_first_img" src="/new/img/Software%20project.png" alt="">
  							<span class="center_information_first_span">黑纱的一个用户在使用黑纱的一个用户在使用黑纱的</span>
  						</div>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  					<li>
  						<span>黑纱hello中关闭系统自动交易能...</span>
  					</li>
  				</ul>
  			</div>
  			
  			<div class="center_information_last">
  				<p>同城排行</p>
  				<ul>
  					<li>
  						1&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  						<div style="height: 0.7rem;position: relative;">
  							<img class="center_information_last_img" src="/new/img/360.png" alt="" style="float: left;">
  							<div>
  								44.4M/
  							<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  							<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  							<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  							<span class="icon iconfont icon-wujiaoxing- icon_hover"></span>
  							<span class="icon iconfont icon-wujiaoxing-"></span>
  							<p style="font-size: 0.16rem;position: absolute;bottom: 0.1rem;left: 1rem;width: 1rem;text-align: center;border-radius: 0.5rem;color: #4a71f1;border: 1px solid #4a71f1;">下载</p>
  							</div>
  						</div>
  					</li>
  					<li>
  						2&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						3&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						4&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						5&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						6&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						7&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						8&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li><li>
  						9&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新版</span>
  					</li>
  					<li>
  						10&nbsp;<img src="/new/img/360.png" alt="">
  						<span>和平精英V1.2.34官网最新</span>
  					</li>
  				</ul>
  			</div>
  		</div>
  		
  		
  		
  	</div>
  	
  	
  	
  	<div class="center_download">
  		<div style="margin-top: 0.5rem;"><span style="font-size: 0.28rem;">下载地址&nbsp</span><i>下载不了？</i><i style="color: #4a71f1;">点击报错</i></div>
  		<div class="center_download_a">
            <?php if(is_array($__ARCHIVES__['downloadurl_list']) || $__ARCHIVES__['downloadurl_list'] instanceof \think\Collection || $__ARCHIVES__['downloadurl_list'] instanceof \think\Paginator): if( count($__ARCHIVES__['downloadurl_list'])==0 ) : echo "" ;else: foreach($__ARCHIVES__['downloadurl_list'] as $key=>$item): ?>
            <div>
                <a style="text-decoration: none;color: #8d97a1;" href="<?php echo $item['url']; ?>" class="btn btn-primary btn-download" target="_blank" data-url="<?php echo $item['url']; ?>" data-id="<?php echo $__ARCHIVES__['id']; ?>" data-clipboard-text="<?php echo $item['password']; ?>"><?php echo $item['title']; ?>下载</a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
  		</div>
  		
  		<div class="center_talk">
  			<div class="center_talk_from_list">
  				<p>软件评论</p>
  				<div id="comment-container">
    <!-- S 评论列表 -->
    <div id="commentlist">
        <?php $aid = $__ARCHIVES__['id']; $__COMMENTLIST__ = \addons\cms\model\Comment::getCommentList(["id"=>"comment","type"=>"archives","aid"=>"$aid","pagesize"=>"10"]); if(is_array($__COMMENTLIST__) || $__COMMENTLIST__ instanceof \think\Collection || $__COMMENTLIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__COMMENTLIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
        <dl id="comment-<?php echo $comment['id']; ?>">
            <dt><a href="<?php echo $comment['user']['url']; ?>" target="_blank"><img src='<?php echo $comment['user']['avatar']; ?>'/></a></dt>
            <dd>
                <div class="parent">
                    <cite><a href='<?php echo $comment['user']['url']; ?>' target="_blank"><?php echo $comment['user']['nickname']; ?></a></cite>
                    <small> <?php echo human_date($comment['createtime']); ?> <a href="javascript:;" data-id="<?php echo $comment['id']; ?>" title="@<?php echo $comment['user']['nickname']; ?> " class="reply">回复TA</a></small>
                    <p><?php echo $comment['content']; ?></p>
                </div>
            </dd>
            <div class="clearfix"></div>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__COMMENTLIST__; if($__COMMENTLIST__->isEmpty()): ?>
        <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无评论</span></div>
        <?php endif; ?>
    </div>
    <!-- E 评论列表 -->

    <!-- S 评论分页 -->
    <div id="commentpager" class="text-center">
        <?php echo $__COMMENTLIST__->render(["type"=>"full"]); ?>
    </div>
    <!-- E 评论分页 -->

    <!-- S 发表评论 -->
    <div id="postcomment">
        <h3>发表评论 <a href="javascript:;">
            <small>取消回复</small>
        </a></h3>
        <form action="<?php echo addon_url('cms/comment/post'); ?>" method="post" id="postform">
            <?php echo token(); ?>
            <input type="hidden" name="type" value="archives"/>
            <input type="hidden" name="aid" value="<?php echo $__ARCHIVES__['id']; ?>"/>
            <input type="hidden" name="pid" id="pid" value="0"/>
            <div class="form-group">
                <textarea name="content" class="form-control" <?php if(!$user): ?>disabled placeholder="请登录后再发表评论" <?php endif; ?> id="commentcontent" cols="6" rows="5" tabindex="4"></textarea>
            </div>
            <?php if(!$user): ?>
            <div class="form-group">
                <a href="<?php echo url('index/user/login', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>" class="btn btn-primary">登录</a>
                <a href="<?php echo url('index/user/register', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>" class="btn btn-outline-primary">注册新账号</a>
            </div>
            <?php else: ?>
            <div class="form-group">
                <input name="submit" type="submit" id="submit" tabindex="5" value="提交评论(Ctrl+回车)" class="btn btn-primary"/>
                <span id="actiontips"></span>
            </div>
            <div class="checkbox">
                <label>
                    <input name="subscribe" type="checkbox" class="checkbox" tabindex="7" checked value="1"/> 有人回复时邮件通知我
                </label>
            </div>
            <?php endif; ?>
        </form>
    </div>
    <!-- E 发表评论 -->
</div>
  				<p class="center_talk_all">共有 <span><?php echo $__ARCHIVES__['comments']; ?></span> 条评论</p>
  			</div>
  		</div>
  	</div>
  	<div class="center_link">
  		<h3>友情链接</h3>
  		<p>搜狗下载 hao123软件 华军软件网</p>
  	</div>
  	
  	
  	<div class="foot">
  		<ul>
  			<li>关于本站</li>
  			<li>下载帮助</li>
  			<li>下载声明</li>
  			<li>软件发布</li>
  			<li>合作厂商</li>
  			<li style="margin-right: 0;">意见反馈</li>
  		</ul>
  		<br>
  		<p>备案编号：湘ICP备16001275号-10</p>
  	</div>
  </div>
</body>
  <!-- import Vue before Element -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- import JavaScript -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script>
    new Vue({
      el: '#app',
      data: function() {
        return { visible: false }
      }
    })
  </script>
</html>