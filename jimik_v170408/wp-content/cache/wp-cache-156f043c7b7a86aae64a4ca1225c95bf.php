<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://www.jimik.cn/xmlrpc.php">

<title>微信应用号（小程序）开发上手体验教程 &#8211; 极米客</title>
<link rel="alternate" type="application/rss+xml" title="极米客 &raquo; Feed" href="http://www.jimik.cn/feed" />
<link rel="alternate" type="application/rss+xml" title="极米客 &raquo; 评论Feed" href="http://www.jimik.cn/comments/feed" />
<link rel="alternate" type="application/rss+xml" title="极米客 &raquo; 微信应用号（小程序）开发上手体验教程评论Feed" href="http://www.jimik.cn/post-123.html/feed" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.jimik.cn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.7"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-syntax-css-css'  href='http://www.jimik.cn/wp-content/plugins/wp-syntax/css/wp-syntax.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css-css'  href='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/css/bootstrap.min.css?ver=3.3.5' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css-css'  href='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/css/font-awesome.min.css?ver=4.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='shaped-blog-stylesheet-css'  href='http://www.jimik.cn/wp-content/themes/shaped-blog/style.css?ver=4.5.7' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css-css'  href='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/css/responsive.css' type='text/css' media='all' />
<script type='text/javascript' src='http://www.jimik.cn/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='http://www.jimik.cn/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.jimik.cn/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.jimik.cn/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='原生JS实现jQuery中的prev、next方法' href='http://www.jimik.cn/post-113.html' />
<meta name="generator" content="WordPress 4.5.7" />
<link rel="canonical" href="http://www.jimik.cn/post-123.html" />
<link rel='shortlink' href='http://www.jimik.cn/?p=123' />
<link rel="alternate" type="application/json+oembed" href="http://www.jimik.cn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.jimik.cn%2Fpost-123.html" />
<link rel="alternate" type="text/xml+oembed" href="http://www.jimik.cn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.jimik.cn%2Fpost-123.html&#038;format=xml" />
<link rel="stylesheet" type="text/css" href="http://www.jimik.cn/wp-content/plugins/wp-code-highlight/css/wp-code-highlight.css" media="screen" />

	<style>

		/* Border Color */
		.btn-social:hover,
		blockquote,
		#respond input:focus[type="text"], 
	    #respond input:focus[type="email"], 
	    #respond input:focus[type="url"],
	    #respond textarea:focus,
	    #comments .comment-reply a:hover
		{
			border-color: ;
		}

		
		/* Background Color */
		.scroll-up a,
		.btn-social:hover,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.navbar-default .navbar-nav .dropdown-menu li a:hover, .dropdown-menu li a:focus, .navbar-default .navbar-nav .dropdown-menu .active a,
		.pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover, .pagination li .current,
		.next-previous-posts .next-post a:hover,
		.next-previous-posts .previous-post a:hover,
		.btn-goback,
		.btn-submit,
		a.more-link,
		.featured-post .fa,
		#comments .comment-reply a:hover,
		.widget .tagcloud a
		{
			background-color: ;
		}

		
		/* Color */
		.text-logo a,
		.navbar-default .navbar-nav .active a, .navbar-default .navbar-nav .active a:hover, .navbar-default .navbar-nav .active a:focus,
		.navbar-default .navbar-nav li a:hover, .navbar-default .navbar-nav li a:focus,
		a:hover,
    	a:focus,
		.next-previous-posts .previous-post a,
		.next-previous-posts .next-post a,
		.pagination>li>a, .pagination>li>span,
		#comments .comment-author a:hover, 
    	#respond .logged-in-as a:hover,
    	#wp-calendar a,
    	h2.entry-title a:hover
		{
			color: ;
		}


		/* A Color */
		a{
			color: ;
		}

		/* a:hover Color */
		a:hover,
		a:focus,
		a:active,
		.widget a:hover,
		.post .post-content .entry-meta ul li a:hover
		{
			color: ;
		}

		/* .featured-post .fa:after*/
		.featured-post .fa:after{
			border-color:   transparent ;
		}


		

	</style>
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #f2f2f2; }
</style>
</head>

<body class="single single-post postid-123 single-format-standard custom-background group-blog">

    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
<!-- /Preloader -->

<header id="header">	
	<div id="trueHeader">
    	<div class="wrapper">
            <div class="container">
            	<!-- Menu -->
            	<div class="menu_main">
                	<div class="navbar blogx-navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navber-collapse">
                                <span class="sr-only">开启/关闭导航</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                                                            <div class="text-logo">
                                    <a href="http://www.jimik.cn">极米客</a>
                                    <p>前端工程师与UI设计师的心灵火花</p>
                                </div><!-- /Logo -->
                                                    </div>
                      
                        <div id="st-navber-collapse" class="navbar-collapse collapse pull-right">
                            <ul id="menu-%e8%8f%9c%e5%8d%95%e4%b8%80" class="menu nav navbar-nav"><li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-35"><a title="首页" href="http://www.jimik.cn/"><span class="glyphicon index"></span>&nbsp;首页</a></li>
<li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-9 dropdown"><a title="前端" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><span class="glyphicon Front End"></span>&nbsp;前端 <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-10" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10"><a title="PC" href="http://www.jimik.cn/post-category/front_end/pc_web">PC</a></li>
	<li id="menu-item-11" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11"><a title="Mobile" href="http://www.jimik.cn/post-category/front_end/mobile_web">Mobile</a></li>
	<li id="menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43"><a title="HTML5+CSS3作品" target="_blank" href="http://www.jimik.cn/iris/index.html">HTML5+CSS3作品</a></li>
</ul>
</li>
<li id="menu-item-6" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-6 dropdown"><a title="UI" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">UI <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-131"><a title="UI作品集" href="http://www.jimik.cn/iris/album.html">UI作品集</a></li>
	<li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7"><a title="ID交互" href="http://www.jimik.cn/post-category/ui/ui_id"><span class="glyphicon ID"></span>&nbsp;ID交互</a></li>
	<li id="menu-item-8" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8"><a title="VD视觉" href="http://www.jimik.cn/post-category/ui/ui_vd"><span class="glyphicon VD"></span>&nbsp;VD视觉</a></li>
</ul>
</li>
<li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-12"><a title="思维碎片" href="http://www.jimik.cn/post-category/about_thinking"><span class="glyphicon About Thinking"></span>&nbsp;思维碎片</a></li>
<li id="menu-item-31" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-31 dropdown"><a title="关于我们" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><span class="glyphicon About Us"></span>&nbsp;关于我们 <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a title="Iris" target="_blank" href="http://www.jimik.cn/iris/about_me.html">Iris</a></li>
</ul>
</li>
</ul> 
                        </div>
                    </div>
            	</div><!-- end menu -->
        	</div> <!-- /.container -->
    	</div>
	</div>
</header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        
                                <article id="post-123" class="post-123 post type-post status-publish format-standard hentry category-about_thinking">
    <header class="entry-header">
        
        
    </header> <!--/.entry-header -->

    <div class="clearfix post-content media">

        <h2 class="entry-title">
            微信应用号（小程序）开发上手体验教程        </h2> <!-- //.entry-title -->

        <div class="clearfix entry-meta">
            
            <ul class="list-inline">
                <li>
                    <span class="author vcard">
                        通过<a class="url fn n" href="http://www.jimik.cn/post-author/cleam">cleam</a>                    </span>
                </li>
                <li>
                    on <span class="posted-on">9月 25, 2016</span>
                </li>
                                    <li>
                        in <span class="posted-in">
                            <a href="http://www.jimik.cn/post-category/about_thinking" rel="category tag">思维碎片</a>                        </span>
                    </li>
                            </ul>
                </div> <!--/.entry-meta -->
        
        <div class="entry-summary">
            <h3>微信应用号/小程序开发IDE：</h3>
<p><a href="https://github.com/gavinkwoe/weapp-ide-crack">https://github.com/gavinkwoe/weapp-ide-crack</a></p>
<blockquote><p>注意：先下0.7版用于登录，再下0.9版用于开发。</p></blockquote>
<h3>微信应用号/小程序开发教程/API：</h3>
<p><a href="https://mp.weixin.qq.com/debug/wxadoc/dev/index.html">https://mp.weixin.qq.com/debug/wxadoc/dev/index.html</a></p>
        </div> <!-- //.entry-summary -->
        
                    <div class="entry-tags"></div>
        
    </div>

</article> <!--/#post-->





                                                                    <div class="post-nav-area">
                                                    
            <nav class="next-previous-post clearfix media" role="navigation">
                <div class="row">
                    <!-- Previous Post -->
                    <div class="previous-post col-sm-6 pull-left">
                        <div class="nav-previous"><i class="fa fa-angle-left"></i> <a href="http://www.jimik.cn/post-113.html" rel="prev">原生JS实现jQuery中的prev、next方法</a></div>                    </div>

                    <!-- Next Post -->
                    <div class="next-post col-sm-6 pull-right text-right">
                                            </div>
                </div>
            </nav><!-- .navigation -->
            
                                            </div>
                                
                                <div id="comments" class="comments-area comments">
    
    				<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">发表评论 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/post-123.html#respond" style="display:none;">取消回复</a></small></h3>				<form action="http://www.jimik.cn/wp-comments-post.php" method="post" id="commentform" class="comment-form row" novalidate>
					<div class="clearfix"></div><div class="col-md-12"><textarea id="comment" placeholder="填写评论..." name="comment" aria-required="true"></textarea></div><div class="col-md-4"><input id="author" name="author" type="text" placeholder="姓名 *" value="" size="30" aria-required='true'/></div>
<div class="col-md-4"><input id="email" name="email" type="text" placeholder="邮箱 *" value="" size="30" aria-required='true'/></div>
<div class="col-md-4"><input id="url" name="url" type="text" placeholder="站点" value="" size="30"/></div>
<p class="form-submit col-md-12"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='123' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="da6af73528" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="6"/></p>				</form>
					</div><!-- #respond -->
		</div>
                            
                                            </main> <!-- /.site-main -->
                </div>  <!-- /.content-area -->
            </div> <!-- /col -->

            <!-- Blogsidebar -->
            
	<div class="col-md-4">
	    <div class="primary-sidebar widget-area" role="complementary">
	        <div id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="http://www.jimik.cn/">
				<label>
					<span class="screen-reader-text">搜索：</span>
					<input type="search" class="search-field" placeholder="搜索&hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="搜索" />
			</form></div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">近期文章</h2>		<ul>
					<li>
				<a href="http://www.jimik.cn/post-123.html">微信应用号（小程序）开发上手体验教程</a>
						</li>
					<li>
				<a href="http://www.jimik.cn/post-113.html">原生JS实现jQuery中的prev、next方法</a>
						</li>
					<li>
				<a href="http://www.jimik.cn/post-107.html">getElementsByClassName封装（兼容写法）</a>
						</li>
					<li>
				<a href="http://www.jimik.cn/post-99.html">网页尺寸offsetHeight</a>
						</li>
					<li>
				<a href="http://www.jimik.cn/post-93.html">网页尺寸scrollHeight</a>
						</li>
				</ul>
		</div>		<div id="recent-comments-4" class="widget widget_recent_comments"><h2 class="widget-title">近期评论</h2><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">不肯留名的人</span>发表在《<a href="http://www.jimik.cn/post-64.html#comment-6">Flash Banner设计——瓷韵</a>》</li><li class="recentcomments"><span class="comment-author-link">Cleam</span>发表在《<a href="http://www.jimik.cn/post-64.html#comment-5">Flash Banner设计——瓷韵</a>》</li><li class="recentcomments"><span class="comment-author-link">cleam</span>发表在《<a href="http://www.jimik.cn/post-54.html#comment-4">印象笔记AE动效</a>》</li><li class="recentcomments"><span class="comment-author-link">cleam</span>发表在《<a href="http://www.jimik.cn/post-24.html#comment-3">JavaScript join()方法</a>》</li><li class="recentcomments"><span class="comment-author-link">cleam</span>发表在《<a href="http://www.jimik.cn/post-24.html#comment-2">JavaScript join()方法</a>》</li></ul></div><div id="archives-4" class="widget widget_archive"><h2 class="widget-title">文章归档</h2>		<ul>
			<li><a href='http://www.jimik.cn/post-date/2016/09'>2016年九月</a>&nbsp;(1)</li>
	<li><a href='http://www.jimik.cn/post-date/2016/05'>2016年五月</a>&nbsp;(1)</li>
	<li><a href='http://www.jimik.cn/post-date/2016/03'>2016年三月</a>&nbsp;(1)</li>
	<li><a href='http://www.jimik.cn/post-date/2016/01'>2016年一月</a>&nbsp;(4)</li>
	<li><a href='http://www.jimik.cn/post-date/2015/12'>2015年十二月</a>&nbsp;(6)</li>
		</ul>
		</div><div id="tag_cloud-4" class="widget widget_tag_cloud"><h2 class="widget-title">标签</h2><div class="tagcloud"><a href='http://www.jimik.cn/post-tag/ae' class='tag-link-14 tag-link-position-1' title='1个话题' style='font-size: 8pt;'>AE</a>
<a href='http://www.jimik.cn/post-tag/dom' class='tag-link-16 tag-link-position-2' title='2个话题' style='font-size: 11.6pt;'>DOM</a>
<a href='http://www.jimik.cn/post-tag/fl' class='tag-link-15 tag-link-position-3' title='1个话题' style='font-size: 8pt;'>FL</a>
<a href='http://www.jimik.cn/post-tag/javascript' class='tag-link-10 tag-link-position-4' title='9个话题' style='font-size: 22pt;'>JavaScript</a></div>
</div>	    </div>
	</div>


        </div> <!-- /.row -->
    </div> <!-- /.container -->
	<!--WP Code Highlight_start-->
	<script type="text/javascript">
		window.onload = function(){prettyPrint();};
	</script>
	<script type="text/javascript" src="http://www.jimik.cn/wp-content/plugins/wp-code-highlight/js/wp-code-highlight.js"></script>
	<!--WP Code Highlight_end-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    </div>
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
  
                    <p>版权所有&nbsp;&copy;&nbsp;<a href="http://www.jimik.cn">jimik.cn</a>&nbsp;湘ICP备15018474号-1</p>
                    
                                            <div class="footer-social-icons">
                                                                                                                                                                                                                                                                                                                                                                                                        
                        </div>
                    
                </div>
            </div>
        </div>
    </footer>

            <div class="scroll-up">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Scroll Up -->

    <script type='text/javascript' src='http://www.jimik.cn/wp-content/plugins/akismet/_inc/form.js?ver=3.2'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/js/bootstrap.min.js?ver=3.3.5'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/js/scripts.js'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/js/jquery.fitvids.js'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-content/themes/shaped-blog/assets/js/smoothscroll.js'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-includes/js/comment-reply.min.js?ver=4.5.7'></script>
<script type='text/javascript' src='http://www.jimik.cn/wp-includes/js/wp-embed.min.js?ver=4.5.7'></script>
    </body>
</html>
<!-- Dynamic page generated in 0.481 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-04-08 22:48:27 -->
