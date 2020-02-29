<?
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";
?>
<html>
<head>
	<title>老王土特产网站-管理后台</title>
	<? include "header.php" ?>
</head>
<body topmargin=0 class="index">
	<div class="wrapper">
		<table class="main">
			<tr class="bar">
				<td colspan=2 >
					<a href="/admin/index.php">
						<img src="/assets/images/logo.png" width="188" height="48" />
						<i class="iconfont  icon-triangle-right"></i><span class="tit">管理后台</span>
					</a>
					<a href="/mvc.php?act=admin/logout" class="rt_link"><i class="iconfont  icon-tuichu"></i>&ensp;退出</a>
					<span class="rt_link"><i class="iconfont  icon-user"></i>&ensp;<?=$_SESSION['login_name']?></span>
				</td>
			</tr>
			<tr class="con">
				<td width="23%" align="center" valign="top" class="lf">
					<a href="config.php" class="active" target="in"><i class="iconfont icon-peizhi"></i>网站配置</a>
					<a href="site_nav_manage.php" target="in"><i class="iconfont icon-daohang"></i>网站导航</a>
					<a href="site_news_add.php" target="in"><i class="iconfont icon-ad-xw"></i>添加新闻</a>
					<a href="site_news_manage.php" target="in"><i class="iconfont icon-guanli"></i>管理新闻</a>
					<a href="addpro.php" target="in"><i class="iconfont  icon-xzcp"></i>添加产品</a>
					<a href="editpro.php" target="in"><i class="iconfont icon-cpgl"></i>管理产品</a>
					<a href="liuyan.php" target="in"><i class="iconfont  icon-msg"></i>查看留言</a>
					<a href="links.php" target="in"><i class="iconfont  icon-icon-"></i>友情链接</a>
				</td>
				<td valign="top" class="rt">
					<iframe width="100%" height="100%" name="in" src="config.php"></iframe>
				</td>
			</tr>

		</table>
	</div>
<script>
$(function(){
	$("td.lf a").click(function(){
		$("td.lf a").removeClass('active');
		$(this).addClass('active');
	});

});
</script>
</body>
</html>
