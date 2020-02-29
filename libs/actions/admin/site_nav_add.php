<?php
if(isset($_POST['submit']))
{
    $name = addslashes($_POST['name']);
    $url = addslashes($_POST['url']);

    $sql = "INSERT INTO site_nav(name, url) VALUES ('{$name}', '{$url}')";
    mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }

    echo "<script>alert('新导航添加成功！'); window.location.href='/admin/site_nav_manage.php'; </script>";
    exit;
}
