<?php
if(isset($_POST['submit']))
{
    $id = intval($_POST['id']);
    $name = addslashes($_POST['name']);
    $url = addslashes($_POST['url']);

    $sql="UPDATE site_nav SET name='{$name}' , url='{$url}' where id={$id} ";
    mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }
    echo "<script>alert('导航编辑成功！'); window.location.href='/admin/site_nav_manage.php'; </script>";
    exit;
}
