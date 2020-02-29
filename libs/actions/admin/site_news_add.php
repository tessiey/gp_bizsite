<?php
if(isset($_POST['submit']))
{
    $title = addslashes($_POST['title']);
    $content = addslashes($_POST['content']);
    $time = date('Y-m-d');

    $sql = "INSERT INTO `news`(`title` ,`content` ,`time`) VALUES ('{$title}', '{$content}', '{$time}')";
    $res = mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }

    echo "<script>alert('站点新闻添加成功！'); window.location.href='/admin/site_news_manage.php'; </script>";
    exit;
}

