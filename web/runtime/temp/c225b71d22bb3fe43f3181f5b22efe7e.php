<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/diyform.html";i:1586166820;s:74:"/Users/a123/Desktop/weidown/web/addons/cms/view/weidown/common/layout.html";i:1586357412;}*/ ?>
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
            

<link rel="stylesheet" href="/assets/libs/toastr/toastr.min.css">
<link rel="stylesheet" href="/assets/libs/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="/assets/libs/nice-validator/dist/jquery.validator.css">
<link rel="stylesheet" href="/assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css">

<style>
    #post-form .input-group-addon {
        background: none;
    }

    #post-form .panel-default {
        padding: 0;
    }
</style>
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($jsconfig); ?>
    };
</script>

<div class="container" id="content-container">

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <section class="article-content">
                        <div class="article-metas text-center">
                            <h1 class="metas-title">
                                <?php echo $__DIYFORM__['title']; ?>
                            </h1>
                        </div>
                        <hr>
                        <div class="py-4">
                            <!-- S 正文 -->

                            <div class="row">
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <form id="post-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo addon_url('cms/diyform/post'); ?>">
                                        <input type="hidden" name="__diyname__" value="<?php echo $diyform['diyname']; ?>">
                                        <?php echo token(); ?>
                                        <?php echo $__DIYFORM__['fieldslist']; ?>

                                        <div class="form-group normal-footer">
                                            <label class="control-label col-xs-12 col-sm-2"></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <button type="submit" class="btn btn-primary btn-embossed disabled"><?php echo __('OK'); ?></button>
                                                <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- E 正文 -->
                        </div>

                        <div class="clearfix"></div>
                    </section>
                </div>
            </div>

        </div>
    </div>
</div>
<script data-render="script">
    require.callback = function () {
        define('diyform/index', ['jquery', 'bootstrap', 'frontend', 'form'], function ($, undefined, Frontend, Form) {
            var Controller = {
                index: function () {
                    Form.api.bindevent($("form[role=form]"), function (data, ret) {
                        Layer.alert(ret.msg, function () {
                            location.href = ret.url;
                        });
                        return false;
                    });
                }
            };
            return Controller;
        });
    }
</script>

<script data-render="script" src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
		</div>
		<script>
			new Vue({
			  el: '#app'
			});
		</script>
	</body>
</html>
