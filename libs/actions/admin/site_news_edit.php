<?php
if(isset($_POST['submit']))
{
    $id = intval($_POST['id']);

    $title = addslashes($_POST['title']);
    $content = addslashes($_POST['content']);

    $sql = "UPDATE news SET title='{$title}', content='{$content}' WHERE id={$id}";
    $res = mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }

    echo "<script>alert('站点新闻编辑成功！'); window.location.href='/admin/site_news_manage.php'; </script>";
    exit;
}



