<?
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");

$seleprosql="select * from pro";
$seleproquery=mysqli_query($conn,$seleprosql);
if(isset($_POST['subpro']))
{
	$upsql="update pro set product_name='".$_POST['product_name']."',product_intro='".$_POST['product_intro']."' where id='".$_GET['proid']."'";
	mysqli_query($conn, $upsql);
	echo "修改成功!<script></script>";
	exit;
}
if(isset($_GET['proid']) && isset($_GET['del']) && $_GET['del']=="yes")
{
	$delsql="delete from pro where id='".$_GET['proid']."'";
	mysqli_query($conn, $delsql);
	echo "<p class='tips_ok' ><i class='iconfont  icon-ok'>删除成功!<a href=editpro.php>返回</a></p>";
	exit;
}
if(isset($_GET['proid']))
{
	$sql="select * from pro where id='".$_GET['proid']."'";
	$row=mysqli_fetch_array(mysqli_query($conn, $sql));
?>
	<form enctype="multipart/form-data" method="post" action="" class="form">
		<span class="bread"><i class="iconfont  icon-icon-"></i>编辑产品：</span>
		 <ul class="list">
			<li><span>产品名称：</span><input placeholder="请输入产品名称" maxlength="15" type=text name=product_name value=<? echo $row['product_name']?> /></li>
			<li><span>产品介绍：</span><textarea placeholder="请输入产品介绍" maxlength="15" cols=40 rows=15 name=product_intro ><? echo $row['product_intro']?> </textarea></li>
		  <input type=submit value=修改产品 name=subpro class="btn-sub"/>
		</ul>
	</form>

<?
exit;
}

echo " <div class='list_wrap'> <span class='bread'><i class='iconfont  icon-flag'></i>管理产品：</span> <ul>";
while($seleprorow=mysqli_fetch_array($seleproquery))
{
	echo "<li class='clearfix'><span><i class='iconfont  icon-dian'></i>".$seleprorow['product_name']."</span><a class='iconfont  icon-del' href=?proid=".$seleprorow['id']."&del=yes>删除</a><a class='iconfont  icon-edite' href=?proid=".$seleprorow['id'].">编辑</a> </li>";
}
echo "</ul></div>";
?>
</div>

