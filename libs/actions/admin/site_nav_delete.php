<?php
if (isset($_GET['id']) && isset($_GET['del']) && $_GET['del'] == "yes") {
    $_GET['id'] = intval($_GET['id']);
    $sql = "DELETE FROM site_nav WHERE id={$_GET['id']}";
    mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }

    echo "<script>alert('导航删除成功！'); window.location.href='/admin/site_nav_manage.php'; </script>";
    exit;
}
