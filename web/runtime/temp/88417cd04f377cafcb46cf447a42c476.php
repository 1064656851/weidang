<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/user.html";i:1586166820;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;s:72:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/item.html";i:1586166820;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="/new/css/comming.css">
		<link rel="stylesheet" href="/new/css/icon/iconfont.css">
		<script src="/new/css/icon/iconfont.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script src="/new/js/index-wap.js"></script>
		<!-- 引入样式文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vant@2.4/lib/index.css">
		
		<!-- 引入 Vue 和 Vant 的 JS 文件 -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vant@2.4/lib/vant.min.js"></script>

	</head>
	<body>
		
		<style>
			
			
			
				.yxtj{padding: 0 0.15rem;}
				.yxtj ul{display: flex;justify-content: space-between;margin: 0;padding: 0;width: 100%;flex-wrap: wrap;}
				.yxtj ul li{width: 48%;margin-bottom: 0.075rem;}
				.yxtj img{height: 0.95rem;width: 100%;}
				
				
				.center_link{padding: 0 0.15rem;color: #596673;}
				.center_link h3{font-size: 0.12rem;}
				.center_link p{font-size: 0.06rem;}
				
				
				.wap_foot {height: 0.8rem;padding: 0 0.15rem;border-top: 1px solid #e6effe;padding-top: 0.35rem;}
				.wap_foot  ul{display: flex;justify-content: space-around;}
				.wap_foot  ul li{float: left;margin-right: 0.2rem;font-size: 0.05rem;}
				.wap_foot  span{display: block;margin: 0.2rem auto;text-align: center;}
				
				
				.head{padding: 0 0.15rem;}
				.head .head_nav{display: flex;justify-content: space-between;height: 0.17rem;background: #f8faff;display: flex;line-height: 0.16rem;font-size: 0.16rem;padding: 0.1rem 0;}
				.head .head_nav span{color: #5479f3;}
				.head_logo{display: flex;justify-content: space-between;height: 0.35rem;line-height: 0.35rem;border-bottom: 2px solid #f7f8ff;}
				.head_logo .icon{font-size: 0.15rem;color: #5479f3;line-height: 0.35rem;}
				.head_logo img{height: 100%;}
				.head span ,.head i{font-size: 0.08rem;line-height: 0.17rem;}
					
				.head_logo .icon{font-size: 0.15rem;color: #5479f3;margin: 0 0.15rem;}
			
			.search{padding: 0.15rem;}
			.search input{width: 100%;height: 0.35rem;background: #f8faff;border: none;border-radius: 0.25rem;text-align: center;color: #b3b8be;font-size: 0.15rem;}
			
			
			.list{padding: 0 0.15rem;}
			.list ul{display: flex;flex-wrap: wrap;margin-top: 0.1rem;justify-content: space-between;padding: 0;}
			.list li{width: 20%;margin-bottom: 0.1rem;}
			.list li img{width: 0.4rem;height: 0.4rem;margin: 0 auto;}
			.list p{font-size: 0.11rem;color: #596673;margin: 0;text-align: center;margin-top: 0.05rem;}
			.list ul li div{display: flex;}
			
			
			
			
			.nav{padding: 0 0.15rem;}
			.nav div{display: flex;}
			.nav img{width: 1rem;height: 0.4rem;}
			.nav ul li{padding: 4px 0.1rem;background: #f8faff;border-radius: 0.15rem;}
			.nav ul{padding: 0;display: flex;justify-content: space-between;width: 100%;margin: 0;margin-bottom: 0.075rem;}
			
			.zjgx_content div{margin-top: 0.3rem;}
			.zjgx {padding: 0 0.15rem;margin-bottom: 0.5rem;}
			.zjgx p{margin: 0;width: 2rem;font-size: 0.125rem;color: #596673;}
			.zjgx div{display: flex;}
			.zjgx ul li{padding: 0.05rem 0.1rem;background: #f8faff;border-radius: 0.1rem;}
			.zjgx ul{display: flex;justify-content: space-between;margin: 0;padding: 0;width: 100%;font-size: 0.1rem;}
			/* .zjgx img{height: 300px;width: 100%;margin-bottom: 30px;margin-top: 30px;} */
			.vant-lbt img{height: 1.5rem;width: 100%;margin-bottom: 0.15rem;margin-top: 0.15rem;}
			
			.zjgx_content_title{flex: 1;display: flex;justify-content: space-between;width: 100%;font-size: 0.11rem;height: 0.2rem;line-height: 0.2rem;}
		</style>
		
		<div id="app">
			<div class="head">
				<div class="head_nav">
					<div class="head_nav_first">
						<span class="icon iconfont icon-xiaoxi"></span>
						<i>欢迎访问</i>
						<span>微当软件！</span>
					</div>
					
					<div class="head_nav_last">
						<span class="icon iconfont icon-wodeqianfenleishouye"></span>
						<span>登陆&nbsp;｜</span>
						<span>注册</span>
					</div>
				</div>
				<div class="head_logo">
					<img src="/new/img/logo-wap.png" alt="">
					<span class="icon iconfont icon-liebiao"></span>
				</div>
			</div>
			
			<div class="search">
				<input type="search" value="输入名称/关键字搜索">
            </div>
            
<style>
    body {
        padding-top: 49px;
    }

    @keyframes wave-animation {
        0% {
            transform: translateX(0) translateZ(0) scaleY(1)
        }
        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
        }
        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
        }
    }

    .wave-wrapper {
        height: 430px;
        position: relative;
    }

    .wave-inner {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 430px;
        bottom: -1px;
        background: #374486;
    }

    .wave-bg-top {
        z-index: 15;
        opacity: 0.5;
    }

    .wave-bg-middle {
        z-index: 10;
        opacity: 0.75;
    }

    .wave-bg-bottom {
        z-index: 5;
    }

    .wave-item {
        position: absolute;
        left: 0;
        width: 200%;
        height: 430px;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
    }

    .wave-top {
        background-size: 50% 100px;
    }

    .wave-animation .wave-top {
        animation: wave-animation 3s;
        -webkit-animation: wave-animation 3s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .wave-middle {
        background-size: 50% 120px;
    }

    .wave-animation .wave-middle {
        animation: wave-animation 10s linear infinite;
    }

    .wave-bottom {
        background-size: 50% 100px;
    }

    .wave-animation .wave-bottom {
        animation: wave-animation 15s linear infinite;
    }

    .userinfo {
        position: absolute;
        z-index: 99;
        text-align: center;
        width: 100%;
        top: 0;
        color: #fff;
    }

    .header-logo {
        margin-top: 60px;
    }

    .userinfo-avatar {
        background: rgba(0, 0, 0, 0.12);
        display: inline-block;
        position: relative;
        padding: 20px;
        border-radius: 50%;
        min-width: 120px;
    }

    .userinfo-avatar img {
        width: 120px;
        height: 120px;
    }

    .nav-noborder > li.active > a, .nav-noborder > li.active > a:focus, .nav-noborder > li.active > a:hover {
        border-color: #fff;
    }

    .nav-noborder {
        border-bottom: none;
    }

    .comment-content {
        border-radius: 3px;
        padding: 12px;
        border: none;
        background: #fafafa;
        margin-bottom: 0;
    }

    .comment-content div {
        line-height: 20px !important;
        margin-bottom: 0px;
        margin-top: 0 !important;
        font-size: 14px !important;
        font-weight: 400;
        color: #777;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .statistics-nums {
        margin-top: 5px;
        color: #999;
    }
</style>
<div class="wave-wrapper wave-animation">
  <div class="userinfo">
      <div class="header-logo">
        <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>" class="userinfo-avatar">
            <img class="img-circle" src="<?php echo cdnurl($__USER__['avatar']); ?>" alt="<?php echo $__USER__['nickname']; ?>">
        </a>
    </div>
      <h2 class="">
        <span><strong><?php echo $__USER__['nickname']; ?></strong></span>
    </h2>
    <h5 class="">
        <span><?php echo (isset($__USER__['bio']) && ($__USER__['bio'] !== '')?$__USER__['bio']:"这家伙很懒，什么也没写"); ?></span>
    </h5>
  </div>
  <div class="wave-inner wave-bg-top">
    <div class="wave-item wave-top" style="background-image: url('/assets/addons/cms/img/wave-top.png')"></div>
  </div>
  <div class="wave-inner wave-bg-middle">
    <div class="wave-item wave-middle" style="background-image: url('/assets/addons/cms/img/wave-mid.png')"></div>
  </div>
  <div class="wave-inner wave-bg-bottom">
    <div class="wave-item wave-bottom" style="background-image: url('/assets/addons/cms/img/wave-bot.png')"></div>
  </div>
</div>

<div class="container-fluid" style="padding:0px 0 50px 0;background:#fff;">
    <header class="space-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-4 col-md-offset-4">
                    <div class="row statistics pt-1 text-center" style="border-top:none;">
                        <div class="col-xs-4">

                            <div class="statistics-text">文章</div>
                            <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/archives">
                                <div class="statistics-nums"><?php echo $statistics['archives']; ?></div>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <div class="statistics-text">评论</div>
                            <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/comment">
                                <div class="statistics-nums"><?php echo $statistics['comments']; ?></div>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <div class="statistics-text">加入时间</div>
                            <div class="statistics-nums"><?php echo human_date($__USER__['createtime']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="container" id="content-container">
    <div class="row mt-4 mb-4">
        <div class="col-md-8 col-sm-12">
            <ul class="nav nav-tabs nav-noborder mb-10 mt-20">
                <li class="active"><a href="javascript:;"><?php echo $title; ?></a></li>
            </ul>
            <div class="tab-inner" style="background:#fff;padding:15px;">
                <?php if($type == 'archives'): ?>
                    <div class="article-list">
                        <?php if(is_array($archivesList) || $archivesList instanceof \think\Collection || $archivesList instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <article class="article-item">
    <div class="media">
        <div class="media-left">
            <a href="<?php echo $item['url']; ?>">
                <div class="embed-responsive embed-responsive-4by3 img-zoom">
                    <img src="<?php echo $item['image']; ?>">
                </div>
            </a>
        </div>
        <div class="media-body">
            <h3 class="article-title">
                <a href="<?php echo $item['url']; ?>" <?php if($item['style']): ?>style="<?php echo $item['style_text']; ?>"<?php endif; ?>><?php echo $item['title']; ?></a>
            </h3>
            <div class="article-intro hidden-xs">
                <?php echo $item['description']; ?>
            </div>
            <div class="article-tag">
                <a href="<?php echo $item['channel']['url']; ?>" class="tag tag-primary"><?php echo $item['channel']['name']; ?></a>
                <span itemprop="date"><?php echo date("Y年m月d日", $item['publishtime']); ?></span>
                <span itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> <?php echo $item['likes']; ?> 点赞</span>
                <span itemprop="comments"><a href="<?php echo $item['url']; ?>#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> <?php echo $item['comments']; ?></a> 评论</span>
                <span itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> <?php echo $item['views']; ?> 浏览</span>
            </div>
        </div>
    </div>

</article>
                        <?php endforeach; endif; else: echo "" ;endif; if($archivesList->isEmpty()): ?>
                            <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无更多数据</span></div>
                        <?php else: ?>
                            <div class="text-center">
                                <a href="?page=<?php echo $page+1; ?>" data-page="<?php echo $page; ?>" class="btn btn-default my-4 px-4 btn-loadmore">加载更多</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="article-list">
                    <?php if(is_array($commentList) || $commentList instanceof \think\Collection || $commentList instanceof \think\Paginator): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <article class="article-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?php echo $item['archives']['url']; ?>">
                                        <div class="embed-responsive embed-responsive-4by3 img-zoom">
                                            <img src="<?php echo $item['archives']['image']; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="article-title">
                                        <a href="<?php echo $item['archives']['url']; ?>" <?php if($item['archives']['style']): ?>style="<?php echo $item['archives']['style_text']; ?>" <?php endif; ?>><?php echo $item['archives']['title']; ?></a>
                                    </h3>
                                    <div class="comment-content">
                                        <div><?php echo $item['content']; ?></div>
                                    </div>
                                    <div class="article-tag">
                                        <span itemprop="date"><i class="fa fa-calendar"></i> <?php echo date("Y年m月d日", $item['createtime']); ?></span>
                                    </div>
                                </div>
                            </div>

                        </article>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <!-- S 分页栏 -->
                    <div class="text-center pager">
                        <?php echo $commentList->render(); ?>
                    </div>
                <!-- E 分页栏 -->
                    <?php if($commentList->isEmpty()): ?>
                        <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无数据</span></div>
                    <?php endif; endif; ?>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="article-sidebar">
                <!-- S 会员菜单 -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked space-nav">
                            <li class="<?php echo $type=='archives'?'active':''; ?>"><a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/archives"><?php echo $user['id']==$__USER__['id']?'我':'TA'; ?>的文章</a></li>
                            <li class="<?php echo $type=='comment'?'active':''; ?>"><a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/comment"><?php echo $user['id']==$__USER__['id']?'我':'TA'; ?>的评论</a></li>
                        </ul>
                    </div>
                </div>
                <!-- E 会员菜单 -->

                <div class="panel panel-blockimg">
                    <a href="https://www.fastadmin.net/store/ask.html">
    <img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive">
</a>
                </div>
            </div>
        </div>
    </div>
</div>

		</div>
		<script>
			new Vue({
			  el: '#app'
			});
		</script>
	</body>
</html>
