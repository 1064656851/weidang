<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/channel_news.html";i:1586166819;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;}*/ ?>
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
            

<div class="container" id="content-container">
    <h1 class="category-title">
        <?php echo $__CHANNEL__['name']; ?>
        <div class="more pull-right">
            <ol class="breadcrumb">
                <!-- S 面包屑导航 -->
                <?php $__5XKHQse6k9__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__5XKHQse6k9__) || $__5XKHQse6k9__ instanceof \think\Collection || $__5XKHQse6k9__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__5XKHQse6k9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__5XKHQse6k9__; ?>
                <!-- E 面包屑导航 -->
            </ol>
        </div>
    </h1>

    <div class="row">
        <div class="col-xs-12 col-md-7">
            <div id="news-focus" class="carousel slide carousel-focus" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__lsJmN7b2f3__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"newsfocus","row"=>"2"]); if(is_array($__lsJmN7b2f3__) || $__lsJmN7b2f3__ instanceof \think\Collection || $__lsJmN7b2f3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lsJmN7b2f3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <li data-target="#carousel-focus-captions" data-slide-to="<?php echo $i-1; ?>" class="<?php if($i==1): ?>active<?php endif; ?>"></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__lsJmN7b2f3__; ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $__aJlo1SZFfO__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"newsfocus","row"=>"2"]); if(is_array($__aJlo1SZFfO__) || $__aJlo1SZFfO__ instanceof \think\Collection || $__aJlo1SZFfO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__aJlo1SZFfO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <div class="item <?php if($i==1): ?>active<?php endif; ?>">
                        <a href="<?php echo $block['url']; ?>">
                            <div class="carousel-img" style="background-image:url('<?php echo $block['image']; ?>');"></div>
                            <div class="carousel-caption hidden-xs">
                                <h3><?php echo $block['title']; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__aJlo1SZFfO__; ?>
                </div>
                <a class="left carousel-control" href="#news-focus" role="button" data-slide="prev">
                    <span class="icon-prev fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#news-focus" role="button" data-slide="next">
                    <span class="icon-next fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-5 focus-img">
            <div class="row">
                <?php $__Bp80GiKCWn__ = \addons\cms\model\Block::getBlockList(["id"=>"item","name"=>"newsfocus","limit"=>"2,4"]); if(is_array($__Bp80GiKCWn__) || $__Bp80GiKCWn__ instanceof \think\Collection || $__Bp80GiKCWn__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Bp80GiKCWn__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="col-xs-6">
                    <a href="<?php echo $item['url']; ?>">
                        <span class="embed-responsive embed-responsive-16by9 img-zoom">
                            <img src="<?php echo $item['image']; ?>" class="embed-responsive-item" alt="">
                            <div class="intro"><?php echo $item['title']; ?></div>
                        </span>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Bp80GiKCWn__; ?>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <main class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body pt-0">
                    <div class="channel-list">
                        <div class="row">
                            <!-- S 栏目列表 -->
                            <?php $__N9LReuJtoB__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$__CHANNEL__['id']]); if(is_array($__N9LReuJtoB__) || $__N9LReuJtoB__ instanceof \think\Collection || $__N9LReuJtoB__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__N9LReuJtoB__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                            <div class="col-xs-12 col-sm-6">
                                <h3><?php echo $channel['textlink']; ?> <em><a href="<?php echo $channel['url']; ?>"><?php echo __('More'); ?></a></em></h3>

                                <?php $__SMtgJPz097__ = \addons\cms\model\Archives::getArchivesList(["id"=>"row","channel"=>$channel['id'],"limit"=>"0,1"]); if(is_array($__SMtgJPz097__) || $__SMtgJPz097__ instanceof \think\Collection || $__SMtgJPz097__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SMtgJPz097__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $row['url']; ?>" <?php if($row['style']): ?>style="<?php echo $row['style_text']; ?>"<?php endif; ?>>
                                            <div class="embed-responsive embed-responsive-4by3 img-zoom">
                                                <img class="embed-responsive-item media-object" width="64" height="64" src="<?php echo $row['image']; ?>">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row['textlink']; ?></h4>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__SMtgJPz097__; ?>

                                <ul class="list-unstyled inner-list">
                                    <?php $__JEezbYigon__ = \addons\cms\model\Archives::getArchivesList(["id"=>"row","channel"=>$channel['id'],"limit"=>"1,5"]); if(is_array($__JEezbYigon__) || $__JEezbYigon__ instanceof \think\Collection || $__JEezbYigon__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__JEezbYigon__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a href="<?php echo $row['url']; ?>" <?php if($row['style']): ?>style="<?php echo $row['style_text']; ?>"<?php endif; ?>><?php echo $row['title']; ?></a>
                                        <span class="pull-right"><?php echo date('m-d',$row['publishtime']); ?></span>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__JEezbYigon__; ?>
                                </ul>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__N9LReuJtoB__; ?>
                            <!-- E 栏目列表 -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
