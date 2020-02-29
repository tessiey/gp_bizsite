<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";
include("header.php");
?>

<div class="links_wrap">
	<span class="bread"><i class="iconfont  icon-flag"></i>友情链接：</span>
    <ul class='nav_list'>
<?php
$ssql="select * from link";
$querrr=mysqli_query($conn, $ssql);
while($roww=mysqli_fetch_array($querrr))
{
?>
<li>
	<span><? echo $roww['linktitle']?></span>
	<a class='iconfont  icon-chakan' href=<? echo $roww['linkurl']?> >查看</a>
	<a class='iconfont  icon-del' href=?linkid=<? echo $roww['id']?>&del=yes>删除</a>
</li>
<?
}
echo "</ul>";
if(isset($_GET['del']) && $_GET['del']=="yes")
{
	$dellinksql="delete from link where id='".$_GET['linkid']."'";
	mysqli_query($conn, $dellinksql) or die("删除失败!");
	echo "删除成功";
}
if(isset($_GET['linksubmit']))
{
	$linksql="insert into link (linktitle,linkurl) values ('".$_GET['linktitle']."','".$_GET['linkurl']."')";
	mysqli_query($conn, $linksql) or die("添加失败！");
	echo "添加成功！"."<br />";
}
?>
<script language=javascript>
	function Checkaddlink()
	{
		if(myform.linktitle.value=="")
		{
			alert("链接名称不能为空！");
			myform.linktitle.focus();
			return false;
		}
		if(myform.linkurl.value==""||myform.linkurl.value=="http://")
		{
			alert("链接地址有误！");
			myform.linktitle.focus();
			return false;
		}
	}
</script>

<form name=myform method=GET action="" onsubmit="return Checkaddlink();" class="form">
	<ul class="list">
		<li><span>链接名称：</span><input placeholder="请输入链接名称" maxlength="6" name="linktitle" type="text" /></li>
		<li><span>链接地址：</span><input placeholder="请输入链接地址" maxlength="0" name="linkurl" type="text" value="http:// "/></li>
		<input type="submit" value="添加链接" name="linksubmit" class="btn-sub">
	</ul>
</form>
</div>
