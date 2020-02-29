<style>
div{
	font-size:15px;
	color:blue;
}
input{
	 width:20px;
	 height:15px;
	 background-color:#ffffff;
	 margin-bottom:2px;
	 line-height:15px;
	 color:#565656;
	 font-size:12px;
	 text-align:center;
	 border:1px solid #00f;
	 overflow:hidden;
}
</style>
<?
require_once "./libs/common.php";
$page1=(int)$_GET['page'];
if($page1<2)
{
	$page=1;
}
else
{
	$page=(int)$_GET['page'];
}
$numsql="select * from news";
$numq=mysqli_query($conn, $numsql);
$num=mysqli_num_rows($numq); //取得新闻总条数
$pagesize=5;
$pageval=($page-1)*$pagesize;
$newssql="select * from news limit ".$pageval." , ".$pagesize."";
$newsquery=mysqli_query($conn, $newssql);
while($newsrow=mysqli_fetch_array($newsquery))
{
?> <div style="width:400px;">
    <div style="margin:10px;padding:0;"><div style="float:left;text-align:left;">
            <img src=/assets/images/1.gif >
            <a href=sitenews.php?newsid=<? echo $newsrow['id']?> style="color:#256EB1;text-decoration:none;">
                <? echo mb_substr($newsrow['title'],0,43);?></a>
        </div>
        <div style="float:right;">
            <? echo $newsrow['time']?>
        </div>
    </div>
    <hr style="border:1px dashed red; height:1px;margin-top:1px;">
<?
}
echo "</div>";
?>
<div style="float:left;margin:10px;">
	<?
	if($page<2)
	{
		echo "上一页";
	}
	else
	{
	?>
	<a href=?page=<? echo $page-1 ?> >上一页</a>
	<?
	}
	$allpage=intval($num/$pagesize)+1;
	if(($allpage)<=$page)
	{
		echo "下一页　";
	}
	else
	{
	?>
	<a href=?page=<? echo $page+1 ?>>下一页</a>
	<?
	}
	echo "现在是第".$page.$_POST['yeshu']."页　";
	echo "选择第<input name='page' type='text' maxlength='3' value='1' />页 </div>";
	?>
