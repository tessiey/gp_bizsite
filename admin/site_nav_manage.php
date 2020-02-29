<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");
?>

<form action="/mvc.php?act=admin/site_nav_add" name="myform" method="post" class="form">
    <span class="bread"><i class="iconfont  icon-flag"></i>网站导航：</span>
    <ul class="list">
        <li><span>导航名称：</span><input type='text' name='name' placeholder="请输入导航名称" maxlength="12" ></li>
        <li><span>链接地址：</span><input type='text' name='url' value= "" placeholder="请输入链接地址" maxlength="250" ></li>
        <input type='submit' name='submit' value='添加' class="btn-sub">
    </ul>
</form>

<?php
echo "<ul class='nav_list'>";
$sql="select * from site_nav";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{
?>
    <li>
		<span style="width: 100%;">
            <a href="<?=$row['url'] ?>" target="_blank"><?=$row['name'] ?></a>
        </span>
        <a href="site_nav_edit.php?id=<?=$row['id'] ?>" class='iconfont  icon-edite' >修改</a>
        <a href="/mvc.php?act=admin/site_nav_delete&id=<?=$row['id'] ?>&del=yes" class='iconfont  icon-del' >删除</a>
    </li>

<?
}
echo "</ul>";
?>



