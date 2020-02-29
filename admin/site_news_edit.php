<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");

if (empty($_GET['id'])) {
    echo "<script>alert('参数不正确，请重新操作！'); window.location.href='/admin/site_nav_manage.php'; </script>";
}

$_GET['id'] = intval($_GET['id']);

$sql = "select * from news WHERE id={$_GET['id']}";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if (empty($row)) {
    echo "<script>alert('无法找到ID={$_GET['id']}的新闻记录，请重新操作！'); window.location.href='/admin/site_nav_manage.php'; </script>";
    exit;
}
?>

<form action="/mvc.php?act=admin/site_news_edit" method='POST' class="news form">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>"/>

    <span class="bread"><i class="iconfont  icon-flag"></i>编辑新闻：</span>
    <ul class="list">
        <li>
            <span>新闻标题：</span>
            <input placeholder="请输入新闻标题" maxlength="64" type="text" name="title" value="<?=$row['title'];?>" />
        </li>
        <li>
            <span>新闻内容：</span>
            <textarea placeholder="请输入新闻内容" maxlength="4000" name="content" cols="50"
                      rows="14"><?= $row['content']; ?></textarea>
        </li>
    </ul>

    <input type="submit" name="submit" value="修改" class="btn-sub">
</form>
