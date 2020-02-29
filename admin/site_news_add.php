<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");
?>
<div>
	<script>
		function Checkadd()
		{
			if(myform.title.value=="")
			{
			  alert("标题不能为空");
			  myform.title.focus();
			  return false;
		  }
		  if(myform.content.value=="")
		  {
		  	alert("新闻内容不能为空");
		  	myform.content.focus();
		  	return false;
		  }
		}
	</script>
	<form class="form" name="myform" method="post" action="/mvc.php?act=admin/site_news_add" onsubmit="return Checkadd();">
		<span class="bread"><i class="iconfont  icon-flag"></i>添加新闻：</span>
		<ul class="list">
			<li><span>新闻标题：</span><input name="title" type=text maxlength="64" placeholder="请输入新闻标题" /></li>
			<li><span class="area_tit">新闻内容：</span><textarea name="content" cols="50" rows="15" placeholder="请输入新闻内容" ></textarea maxlength="1000" ></li>
			<input type="submit" name="submit" value="添加" class="btn-sub"/>
		</ul>
	</form>
</div>
