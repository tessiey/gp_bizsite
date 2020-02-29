<?
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

$sql="select * from liuyan";
$query=mysqli_query($conn, $sql);
if($_GET['lyid']&&$_GET['del']=="yes")
{
	$delsql="delete from liuyan where id='".$_GET['lyid']."'";
	mysqli_query($conn, $delsql);
	echo "<script>window.location.href='liuyan.php'</script>";
}
?>
<table border=1 width=500px>
	<tr><td>姓名</td><td>标题</td><td colspan=2>内容</td></tr>
<?
while($row=mysqli_fetch_array($query))
{
    ?><tr><td><? echo $row['name']?></td><td><? echo $row['title']?></td><td><? echo $row['content']?></td><td><a href=?lyid=<? echo $row['id']?>&&del=yes>删除</td></tr><?
  //echo "<a href=?lyid=".$row['id'].">".$row['title']."</a>".$row['time']."<a href=?lyid=".$row['id']."&&del=yes>删除</a><br>";
}
?>
</table>
<div>
</div>
