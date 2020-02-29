<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");

if( empty($_GET['id']))
{
    echo "<script>alert('参数不正确，请重新操作！'); window.location.href='/admin/site_nav_manage.php'; </script>";
}

$_GET['id'] = intval($_GET['id']);

$sql="select * from site_nav WHERE id={$_GET['id']}";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

if( empty($row))
{
    echo "<script>alert('无法找到ID={$_GET['id']}的导航记录，请重新操作！'); window.location.href='/admin/site_nav_manage.php'; </script>";
    exit;
}
?>

<form action="/mvc.php?act=admin/site_nav_edit" method='POST' class="form">
    <input type="hidden" name="id" value="<?=$_GET['id'] ?>" />
    <span class="bread"><i class="iconfont  icon-flag"></i>修改网站导航：</span>
    <ul class="list">
        <li><span>导航名称：</span><input placeholder="请输入导航名称" maxlength="12" type='text' name='name' value=<? echo $row['name']?> ></li>
        <li><span>链接地址：</span><input placeholder="请输入链接地址" maxlength="250" type='text' name='url' value=<? echo $row['url']?> ></li>
    </ul>
    <input type="submit" name="submit" value="修改" class="btn-sub">
</form>

