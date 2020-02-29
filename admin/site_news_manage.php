<?php
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

include("header.php");

$sql = "select * from news";
$query = mysqli_query($conn, $sql);
?>


<div class="list_wrap">
    <span class="bread"><i class="iconfont  icon-flag"></i>管理新闻：</span>
    <ul>
        <?
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <li class="clearfix">
                <span><i class="iconfont  icon-square"></i>
                    <?=mb_substr($row['title'],0,32);?>...
                </span>
                <a class='iconfont  icon-del' href="/mvc.php?act=admin/site_news_delete&id=<?= $row['id']; ?>&del=yes">删除</a>
                <a class="iconfont  icon-edite" href="site_news_edit.php?id=<?= $row['id']; ?>">编辑</a>
            </li>
        <?
        }
        ?>
    </ul>
</div>
