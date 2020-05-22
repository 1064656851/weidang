<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/list_download.html";i:1589940750;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		
		<link rel="stylesheet" href="/new/css/comming.css">
		<link rel="stylesheet" href="/new/css/icon/iconfont.css">
		<script src="/new/css/icon/iconfont.js"></script>
		<script src="/new/js/index.js"></script>
	</head>
	<body>
		<style>
			
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
			
			.center{width: 12.22rem;padding: 0.3rem 1.1rem;}
			.center .center_title span{color: #b3b8be;}
			.center .center_title i{color: #596673;}
			.center_list{height: 0.26rem;line-height: 0.26rem;margin-top: 0.24rem;}
			.center_list h3{color: #596673;float: left;margin: 0;}
			.center_list ul{float: left;margin: 0;}
			.center_list ul li{float: left;margin-right: 0.6rem;width: 1.1rem;text-align: center;border-radius: 0.2rem;}
			.center_list_hover{background: #3964f0;color: #fff;}
			.center_list_bar{width: 12rem;margin-top: 0.5rem;}
			.center_list_bar ul{display: flex;padding: 0;justify-content: space-around;flex-wrap: wrap;}
			.center_list_bar ul li{width: 2.8rem;margin-bottom: 0.32rem;background: #ffffff;border-radius: 0.1rem;}
			.center_list_bar ul li p{font-size: 0.24rem;text-align: center;margin: 0;line-height: 0.5rem;color: #4a4a4a;}
			.center_list_bar ul li img{width: 2.8rem;height: 1.45rem;display: inline;}
			.center_list_bar_hover{box-shadow: #ecebfa 2px 2px 2px 2px;}
			
			.center_btn{width:9rem;height: 0.5rem;margin: auto;}
			
			.center_btn ul li{float: left;padding: 0.1rem;margin: 4px;border: 1px solid #d9d9d9;width: 0.1rem;height: 0.1rem;text-align: center;line-height: 0.1rem;}
			.center_btn .center_btn——first{height: 0.1rem;padding: 0.1rem;border: 1px solid #d9d9d9;float: left;margin: 4px;text-align: center;line-height: 0.1rem;}
			.center_btn div{height: 0.1rem;padding: 0.1rem;float: left;margin: 4px 0;text-align: center;line-height: 0.1rem;}
			
			
			.center_link{margin: 0.3rem 0;height: 0.5rem;}
			.center_link h3{color: #5f6b78;font-size: 0.20rem;margin: 0;}
			.center_link p{color: #5f6b78;}

			.head_list li a{
			text-decoration: none;color: #8d97a1;
		}
		.head_list li a:hover{
			color: navy;text-decoration:underline;
		}

		.center_list a{text-decoration: none;color: #596673;}
		.center_list_hover a{color: #fff;}

		.center_title i a{color: #596673;text-decoration: none;}
		</style>
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
				<img src="img/logo.png" alt="">
				<ul>
					<!-- 11dsfsrdgsrgdr -->
					<li><a href="">首页</a></li>
					<li><a href="">PC软件</a></li>
					<li><a href="">MAC软件</a></li>
					<li><a href="">安卓软件</a></li>
					<li><a href="">软件专题</a></li>
					<li><a href="">游戏库</a></li>
					<li><a href="">教程咨询</a></li>
				</ul>
				<span class="icon iconfont icon-sousuo"></span>
			</div>
		</div>
		
		<div class="center">
			<div class="center_title">
                <span>您现在的位置:</span>
                <i>
                    <!-- S 面包屑导航 -->
                    <?php $__jidCeR4sHr__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__jidCeR4sHr__) || $__jidCeR4sHr__ instanceof \think\Collection || $__jidCeR4sHr__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jidCeR4sHr__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a> -
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jidCeR4sHr__; ?>
                    软件列表
                    <!-- E 面包屑导航 -->
                </i>
            </div>
            
            <?php $__jLiEx47Y0Q__ = \addons\cms\model\Archives::getPageFilter($__FILTERLIST__, ["id"=>"filter","exclude"=>""]); if(is_array($__jLiEx47Y0Q__) || $__jLiEx47Y0Q__ instanceof \think\Collection || $__jLiEx47Y0Q__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jLiEx47Y0Q__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filter): $mod = ($i % 2 );++$i;?>
			<div class="center_list">
				<h3><?php echo $filter['title']; ?>:</h3>
				<ul>
                    <?php if(is_array($filter['content']) || $filter['content'] instanceof \think\Collection || $filter['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $filter['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li class="<?php echo !empty($item['active'])?'center_list_hover':''; ?>"><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jLiEx47Y0Q__; ?>
			<div class="center_list_bar">
				<ul>
                    <?php $__gGMjfq9uVx__ = \addons\cms\model\Archives::getPageList($__PAGELIST__, ["id"=>"item"]); if(is_array($__gGMjfq9uVx__) || $__gGMjfq9uVx__ instanceof \think\Collection || $__gGMjfq9uVx__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gGMjfq9uVx__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<li class="center_list_bar_hover">
						<img src="<?php echo $item['image']; ?>" alt="">
						<p><?php echo $item['title']; ?></p>
					</li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gGMjfq9uVx__; ?>
				</ul>
			</div>
			<div class="center_btn">
				<?php echo $__PAGELIST__->render(["type"=>"full"]); ?>
            </div>
            <?php if($__PAGELIST__->isEmpty()): ?>
            <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无数据</span></div>
            <?php endif; ?>
			<div class="center_link">
				<h3>友情链接</h3>
				<p>搜狗下载 hao123软件 华军软件网</p>
			</div>
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
	</body>
</html>
