<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/show_product.html";i:1586166820;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;s:75:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/comment.html";i:1586166819;}*/ ?>
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
    .swiper-container {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .gallery-top {
        height: 80%;
        width: 100%;
    }

    .gallery-thumbs {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
        opacity: 1;
    }

    .article-image {
        height: 820px;
    }

    @media (max-width: 767px) {

        .article-image {
            height: 400px;
        }
    }

</style>

<div class="container" id="content-container">

    <div class="row">

        <main class="col-xs-12">

            <div class="panel panel-default article-content">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <!-- S 面包屑导航 -->
                        <?php $__4RYrGQTcJS__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__4RYrGQTcJS__) || $__4RYrGQTcJS__ instanceof \think\Collection || $__4RYrGQTcJS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__4RYrGQTcJS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__4RYrGQTcJS__; ?>
                        <!-- E 面包屑导航 -->
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="article-metas">
                        <h1 class="metas-title" <?php if($__ARCHIVES__['style']): ?>style="<?php echo $__ARCHIVES__['style_text']; ?>"<?php endif; ?>>
                            <?php echo $__ARCHIVES__['title']; ?>
                        </h1>
                        <!-- S 统计信息 -->
                        <div class="metas-body">
                            <span class="views-num">
                                <i class="fa fa-eye"></i> <?php echo $__ARCHIVES__['views']; ?> 阅读
                            </span>
                            <span class="comment-num">
                                <i class="fa fa-comments"></i> <?php echo $__ARCHIVES__['comments']; ?> 评论
                            </span>
                            <span class="like-num">
                                <i class="fa fa-thumbs-o-up"></i>
                                <span class="js-like-num"> <?php echo $__ARCHIVES__['likes']; ?> 点赞
                                </span>
                            </span>
                        </div>
                        <!-- E 统计信息 -->
                    </div>
                    <?php if((isset($__ARCHIVES__['price']) && $__ARCHIVES__['price']<=0) || $__ARCHIVES__['is_paid_part_of_content']): ?>
                    <div class="article-image mt-4">

                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php if(is_array(explode(',',$__ARCHIVES__['productdata'])) || explode(',',$__ARCHIVES__['productdata']) instanceof \think\Collection || explode(',',$__ARCHIVES__['productdata']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['productdata']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                                <div class="swiper-slide" style="background-image:url(<?php echo cdnurl($image); ?>)"></div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php if(is_array(explode(',',$__ARCHIVES__['productdata'])) || explode(',',$__ARCHIVES__['productdata']) instanceof \think\Collection || explode(',',$__ARCHIVES__['productdata']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['productdata']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                                <div class="swiper-slide" style="background-image:url(<?php echo cdnurl($image); ?>)"></div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="article-text">
                        <!-- S 正文 -->
                        <p>
                            <?php echo $__ARCHIVES__['content']; ?>
                        </p>
                        <!-- E 正文 -->
                    </div>
                    <?php endif; ?>

                    <!-- S 付费阅读 -->
                    <?php if(isset($__ARCHIVES__['price']) && $__ARCHIVES__['price']>0): ?>
                    <div class="article-pay">
                        <?php if($__ARCHIVES__['ispaid']): ?>
                        <div class="alert alert-success">
                            <strong>温馨提示!</strong> 以下是付费内容
                            <b>你可以随意修改付费可见的字段或内容，这里仅测试标题：<?php echo $__ARCHIVES__['title']; ?></b>
                            请直接修改模板中需要显示的付费字段
                        </div>
                        <?php else: ?>
                        <div class="alert alert-danger">
                            <strong>温馨提示!</strong> 你需要支付 <b>￥<?php echo $__ARCHIVES__['price']; ?></b> 元后才能查看付费内容
                            <a href="<?php echo addon_url('cms/order/submit', ['id'=>$__ARCHIVES__['id']]); ?>" class="btn btn-success"><i class="fa fa-wechat"></i> 立即支付</a>
                            <a href="<?php echo addon_url('cms/order/submit', ['id'=>$__ARCHIVES__['id'],'paytype'=>'alipay']); ?>" class="btn btn-primary"><i class="fa fa-money"></i> 支付宝支付</a>
                            <a href="<?php echo addon_url('cms/order/submit', ['id'=>$__ARCHIVES__['id'],'paytype'=>'balance']); ?>" class="btn btn-warning btn-balance" data-price="<?php echo $__ARCHIVES__['price']; ?>"><i class="fa fa-dollar"></i> 余额支付</a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <!-- E 付费阅读 -->

                    <div class="article-donate">
                        <a href="javascript:" class="btn btn-primary btn-like btn-lg" data-action="vote" data-type="like" data-id="<?php echo $__ARCHIVES__['id']; ?>" data-tag="archives"><i class="fa fa-thumbs-up"></i> 点赞(<span><?php echo $__ARCHIVES__['likes']; ?></span>)</a>
                        <a href="javascript:" class="btn btn-outline-primary btn-donate btn-lg" data-image="<?php echo cdnurl($config['donateimage']); ?>" data-action="donate" data-id="<?php echo $__ARCHIVES__['id']; ?>"><i class="fa fa-cny"></i> 打赏</a>
                    </div>

                    <div class="entry-meta">
                        <ul>
                            <!-- S 归档 -->
                            <li><?php echo __('Article category'); ?>：<a href="<?php echo $__CHANNEL__['url']; ?>"><?php echo $__CHANNEL__['name']; ?></a></li>
                            <li><?php echo __('Article tags'); ?>：<?php if(is_array($__ARCHIVES__['tagslist']) || $__ARCHIVES__['tagslist'] instanceof \think\Collection || $__ARCHIVES__['tagslist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__ARCHIVES__['tagslist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="<?php echo $tag['url']; ?>" class="tag" rel="tag"><?php echo $tag['name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></li>
                            <li><?php echo __('Article views'); ?>：<span><?php echo $__ARCHIVES__['views']; ?></span> 次浏览</li>
                            <li><?php echo __('Post date'); ?>：<?php echo datetime($__ARCHIVES__['publishtime']); ?></li>
                            <li><?php echo __('Article url'); ?>：<a href="<?php echo $__ARCHIVES__['fullurl']; ?>"><?php echo $__ARCHIVES__['fullurl']; ?></a></li>
                            <!-- S 归档 -->
                        </ul>

                        <ul class="article-prevnext">
                            <!-- S 上一篇下一篇 -->
                            <?php $prev = \addons\cms\model\Archives::getPrevNext("prev", $__ARCHIVES__['id'], $__CHANNEL__['id']);if($prev): ?>
                            <li>
                                <span><?php echo __('Prev'); ?> &gt;</span>
                                <a href="<?php echo $prev['url']; ?>"><?php echo $prev['title']; ?></a>
                            </li>
                            <?php endif;$next = \addons\cms\model\Archives::getPrevNext("next", $__ARCHIVES__['id'], $__CHANNEL__['id']);if($next): ?>
                            <li>
                                <span><?php echo __('Next'); ?> &gt;</span>
                                <a href="<?php echo $next['url']; ?>"><?php echo $next['title']; ?></a>
                            </li>
                            <?php endif;?>
                            <!-- E 上一篇下一篇 -->
                        </ul>
                    </div>

                    <div class="article-action-btn">
                        <div class="pull-left">
                            <!-- S 收藏 -->
                            <a class="product-favorite addbookbark mr-2" href="javascript:;">
                                <i class="fa fa-heart"></i> <?php echo __('Favourite'); ?>
                            </a>
                            <!-- E 收藏 -->
                            <!-- S 分享 -->
                            <span class="bdsharebuttonbox share-box bdshare-button-style0-16">
                            <a class="bds_more share-box-a" data-cmd="more">
                                <i class="fa fa-share"></i> <?php echo __('Share'); ?>
                            </a>
                        </span>
                            <!-- E 分享 -->
                        </div>
                        <div class="pull-right">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="related-article">
                        <div class="row">
                            <!-- S 相关文章 -->
                            <?php $__pDIlAV3SRa__ = \addons\cms\model\Archives::getArchivesList(["id"=>"relate","tags"=>$__ARCHIVES__['tags'],"model"=>$__ARCHIVES__['model_id'],"row"=>"4"]); if(is_array($__pDIlAV3SRa__) || $__pDIlAV3SRa__ instanceof \think\Collection || $__pDIlAV3SRa__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__pDIlAV3SRa__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$relate): $mod = ($i % 2 );++$i;?>
                            <div class="col-sm-3 col-xs-6">
                                <a href="<?php echo $relate['url']; ?>" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="<?php echo $relate['image']; ?>" alt="<?php echo $relate['title']; ?>" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5><?php echo $relate['title']; ?></h5>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__pDIlAV3SRa__; ?>
                            <!-- E 相关文章 -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="panel panel-default" id="comments">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo __('Comment list'); ?>
                        <small>共有 <span><?php echo $__ARCHIVES__['comments']; ?></span> 条评论</small>
                    </h3>
                </div>
                <div class="panel-body">
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
                </div>
            </div>

        </main>

    </div>
</div>
<script data-render="script">
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });
</script>
		</div>
		<script>
			new Vue({
			  el: '#app'
			});
		</script>
	</body>
</html>
