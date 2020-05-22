<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/list_news.html";i:1586166820;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;s:77:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/item_news.html";i:1586166820;s:75:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/sidebar.html";i:1586166820;}*/ ?>
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
                <?php $__06c3KXUWpD__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__06c3KXUWpD__) || $__06c3KXUWpD__ instanceof \think\Collection || $__06c3KXUWpD__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__06c3KXUWpD__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__06c3KXUWpD__; ?>
                <!-- E 面包屑导航 -->
            </ol>
        </div>
    </h1>
    <?php if($__FILTERLIST__): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                筛选
            </h3>
        </div>
        <div class="panel-body">
            <div class="tabs-wrapper">
                <?php $__6yuAp3T7Il__ = \addons\cms\model\Archives::getPageFilter($__FILTERLIST__, ["id"=>"filter","exclude"=>""]); if(is_array($__6yuAp3T7Il__) || $__6yuAp3T7Il__ instanceof \think\Collection || $__6yuAp3T7Il__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6yuAp3T7Il__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filter): $mod = ($i % 2 );++$i;?>
                <div class="tabs-group">
                    <div class="title"><?php echo $filter['title']; ?>:</div>
                    <ul class="content clearfix">
                        <?php if(is_array($filter['content']) || $filter['content'] instanceof \think\Collection || $filter['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $filter['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <li class="<?php echo !empty($item['active'])?'active':''; ?>"><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__6yuAp3T7Il__; ?>
                <!-- E 分类列表 -->
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">

        <main class="col-xs-12 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>列表</span>
                        <div class="more">
                            <ul class="list-unstyled list-inline category-order clearfix">
                                <!-- S 排序 -->
                                <?php $__rlGKBhLTmd__ = \addons\cms\model\Archives::getPageOrder($__ORDERLIST__, ["id"=>"order"]); if(is_array($__rlGKBhLTmd__) || $__rlGKBhLTmd__ instanceof \think\Collection || $__rlGKBhLTmd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__rlGKBhLTmd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo $order['url']; ?>" class="<?php echo !empty($order['active'])?'active':''; ?>"><?php echo $order['title']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__rlGKBhLTmd__; ?>
                                <!-- E 排序 -->
                            </ul>
                        </div>
                    </h3>
                </div>
                <div class="panel-body py-0">
                    <div class="article-list">

                        <!-- S 列表 -->
                        <?php $__jmDWaM75SF__ = \addons\cms\model\Archives::getPageList($__PAGELIST__, ["id"=>"item"]); if(is_array($__jmDWaM75SF__) || $__jmDWaM75SF__ instanceof \think\Collection || $__jmDWaM75SF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jmDWaM75SF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <article class="article-item">
    <div class="media">
        <?php if($item['hasimage']): ?>
        <div class="media-left">
            <a href="<?php echo $item['url']; ?>">
                <div class="embed-responsive embed-responsive-4by3 img-zoom">
                    <img src="<?php echo $item['image']; ?>">
                </div>
            </a>
        </div>
        <?php endif; ?>
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
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jmDWaM75SF__; ?>
                        <!-- E 列表 -->

                        
                        <?php if(false): ?>
                            <!-- S 分页栏 -->
                            <div class="text-center pager">
                                <?php echo $__PAGELIST__->render(["type"=>"simple"]); ?>
                            </div>
                            <!-- E 分页栏 -->
                            <?php if($__PAGELIST__->isEmpty()): ?>
                            <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无数据</span></div>
                            <?php endif; endif; if($__PAGELIST__->isEmpty()): ?>
                            <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无更多数据</span></div>
                        <?php else: ?>
                            <div class="text-center">
                                <a href="?page=<?php echo $__PAGELIST__->getNextPage(); ?>" data-page="<?php echo $__PAGELIST__->getNextPage(); ?>" class="btn btn-default my-4 px-4 btn-loadmore">加载更多</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>

        <aside class="col-xs-12 col-sm-4">
            
<div class="panel panel-blockimg">
    <a href="https://www.fastadmin.net/store/ask.html">
    <img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive">
</a>
</div>

<!-- S 热门资讯 -->
<div class="panel panel-default hot-article">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Recommend news'); ?></h3>
    </div>
    <div class="panel-body">
        <?php $__6NLlX21e0T__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","model"=>1,"row"=>"10","flag"=>"recommend","orderby"=>"id","orderway"=>"asc"]); if(is_array($__6NLlX21e0T__) || $__6NLlX21e0T__ instanceof \think\Collection || $__6NLlX21e0T__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6NLlX21e0T__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="media media-number">
            <div class="media-left">
                <span class="num"><?php echo $i; ?></span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__6NLlX21e0T__; ?>
    </div>
</div>
<!-- E 热门资讯 -->

<div class="panel panel-blockimg">
    <a href="https://www.fastadmin.net/go/aliyun" rel="nofollow" title="FastAdmin推荐企业服务器" target="_blank">
        <img src="https://cdn.fastadmin.net/uploads/store/aliyun-sidebar.png" class="img-responsive" alt="">
</a>
</div>

<!-- S 热门标签 -->
<div class="panel panel-default hot-tags">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Hot tags'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="tags">
            <?php $__mNIgwboCuS__ = \addons\cms\model\Tags::getTagsList(["id"=>"tag","orderby"=>"rand","limit"=>"30"]); if(is_array($__mNIgwboCuS__) || $__mNIgwboCuS__ instanceof \think\Collection || $__mNIgwboCuS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__mNIgwboCuS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo $tag['url']; ?>" class="tag"> <span><?php echo $tag['name']; ?></span></a>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__mNIgwboCuS__; ?>
        </div>
    </div>
</div>
<!-- E 热门标签 -->

<!-- S 推荐下载 -->
<div class="panel panel-default recommend-article">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Recommend download'); ?></h3>
    </div>
    <div class="panel-body">
        <?php $__FhNCm98cA2__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","model"=>3,"row"=>"10","flag"=>"recommend","orderby"=>"id","orderway"=>"asc","addon"=>"downloads"]); if(is_array($__FhNCm98cA2__) || $__FhNCm98cA2__ instanceof \think\Collection || $__FhNCm98cA2__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__FhNCm98cA2__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="media media-number">
            <div class="media-left">
                <span class="num"><?php echo $i; ?></span>
            </div>
            <div class="media-body">
                <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__FhNCm98cA2__; ?>
    </div>
</div>
<!-- E 推荐下载 -->

<div class="panel panel-blockimg">
    <a href="http://www.fastadmin.net/go/aliyun"><img src="https://cdn.fastadmin.net/uploads/store/enterprisehost.png" class="img-responsive"/></a>
</div>
        </aside>
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
