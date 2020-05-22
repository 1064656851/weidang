<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/index.html";i:1589938404;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;}*/ ?>
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
            

<div class="list">
    <ul>
        <?php $__cBYb8ped0G__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","model"=>3,"row"=>"5","flag"=>"recommend","orderby"=>"id","orderway"=>"asc","addon"=>"downloads"]); if(is_array($__cBYb8ped0G__) || $__cBYb8ped0G__ instanceof \think\Collection || $__cBYb8ped0G__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cBYb8ped0G__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <li>
            <div><img src="<?php echo $item['image']; ?>" alt=""></div>
            <p><a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>" target="_blank"><?php echo $item['title']; ?></a></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__cBYb8ped0G__; ?>
    </ul>
</div>



<div class="nav">
    <div>
        <img src="/new/img/10yy.png" alt="">
        <ul>
            <li>QQ拼音</li>
            <li>搜狗五笔</li>
            <li>美图秀秀</li>
            <li>搜狗拼音</li>
            <li>搜狗拼音</li>
        </ul>
    </div>
    <div>
        <img src="/new/img/10tj.png" alt="">
        <ul>
            <li>QQ拼音</li>
            <li>搜狗五笔</li>
            <li>美图秀秀</li>
            <li>搜狗拼音</li>
            <li>搜狗拼音</li>
        </ul>
    </div>
    <div>
        <img src="/new/img/10zt.png" alt="">
        <ul>
            <li>QQ拼音</li>
            <li>搜狗五笔</li>
            <li>美图秀秀</li>
            <li>搜狗拼音</li>
            <li>搜狗拼音</li>
        </ul>
    </div>
</div>



<div class="zjgx">
    
    <div>
        <p>最近更新</p>
        <ul>
            <li style="background: #3964f0;color: #fff;">PC软件</li>
            <li>MAC软件</li>
            <li>安卓软件</li>
            <li>软件专题</li>
        </ul>
        
    </div>
    <van-swipe :autoplay="3000" indicator-color="white" class='vant-lbt'>
      <van-swipe-item><img src="/new/img/jy1.png" ></van-swipe-item>
      <van-swipe-item><img src="/new/img/jy2.jpg" ></van-swipe-item>
      <van-swipe-item><img src="/new/img/jy3.jpg" ></van-swipe-item>
      
    </van-swipe>
</div>
<div class="zjgx">
    
    
    
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    
</div>


<div class="zjgx">
    
    <div>
        <p>最近更新</p>
        <ul>
            <li style="background: #3964f0;color: #fff;">PC软件</li>
            <li>MAC软件</li>
            <li>安卓软件</li>
            <li>软件专题</li>
        </ul>
        
    </div>
    
</div>
<div class="list">
    <ul>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        
        
        
        
    </ul>
</div>
<div class="zjgx">
    
    
    
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    
</div>
<div class="zjgx">
    
    <div>
        <p>最近更新</p>
        <ul>
            <li style="background: #3964f0;color: #fff;">PC软件</li>
            <li>MAC软件</li>
            <li>安卓软件</li>
            <li>软件专题</li>
        </ul>
        
    </div>
    
</div>
<div class="list">
    <ul>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        <li>
            <div><img src="/new/img/360.png" alt=""></div>
            <p>360卫士</p>
        </li>
        
        
        
        
    </ul>
</div>
<div class="zjgx">
    
    
    
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    <div class="zjgx_content">
        <div class="zjgx_content_title">
            <div>【行业软件】<span style="color: #1CD09B;" class="icon iconfont icon-diannao"></span>一周电商助手免费版一周免费版</div>
            <div>2019-12-12</div>
        </div>
    </div>
    
</div>



<div class="zjgx">
    
    <div>
        <p>游戏推荐</p>
        <ul>
            <li style="background: #3964f0;color: #fff;">PC软件</li>
            <li>MAC软件</li>
            <li>安卓软件</li>
            <li>软件专题</li>
        </ul>
        
    </div>
    
</div>
<div class="yxtj">
    
    
    <div>
        <ul>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
        </ul>
    </div>
</div>


<div class="zjgx">
    
    <div>
        <p>游戏推荐</p>
        <ul>
            <li style="background: #3964f0;color: #fff;">PC软件</li>
            <li>MAC软件</li>
            <li>安卓软件</li>
            <li>软件专题</li>
        </ul>
        
    </div>
    
</div>
<div class="yxtj">
    
    
    <div>
        <ul>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
            <li><img src="/new/img/mhxy.png" alt=""></li>
        </ul>
    </div>
</div>


<div class="center_link">
   
    <h3>友情链接</h3>
    <p><a href="https://www.fastadmin.net" title="FastAdmin - 极速后台开发框架">FastAdmin</a> <a href="https://gitee.com" title="FastAdmin码云仓库">码云</a> <a href="https://github.com" title="FastAdminGithub仓库">Github</a> <a href="https://doc.fastadmin.net" title="FastAdmin文档 - 极速后台开发框架">FastAdmin文档</a> <a href="https://ask.fastadmin.net" title="FastAdmin问答社区 - 极速后台开发框架">FastAdmin问答社区</a></p>
   
</div>



<div class="wap_foot">
    <ul>
        <li>关于本站</li>
        <li>下载帮助</li>
        <li>下载声明</li>
        <li>软件发布</li>
        <li>合作厂商</li>
        <li>意见反馈</li>
    </ul>
    <br>
    <span>备案编号：湘ICP备16001275号-10</span>
</div>
		</div>
		<script>
			new Vue({
			  el: '#app'
			});
		</script>
	</body>
</html>
