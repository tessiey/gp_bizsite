<?php
if (isset($_POST['submit'])) {
    unset($_POST['submit']);

    $fieds = "";
    foreach ($_POST as $key => $value) {
        $safe_key = addslashes($key);
        $safe_value = addslashes($value);
        $fieds = $fieds . " {$safe_key}='{$safe_value}',";
    }
    $fieds = rtrim($fieds, ',');

    $sql = "UPDATE ent_info SET {$fieds}";
    mysqli_query($conn, $sql);

    if(mysqli_errno($conn)!=0){
        $errormsg = mysqli_error($conn);
        echo "<script>alert('操作失败！\r\n错误消息如下所示: \r\n{$errormsg}'); window.location.href='/admin/site_news_manage.php'; </script>";
        exit;
    }

    // 生成缓存信息文件
    $sql="SELECT * FROM ent_info";
    $res=mysqli_query($conn, $sql);
    $ent_info=mysqli_fetch_array($res);

    $ent_info = var_export($ent_info, true);
    $config_content = "<?php\r\nreturn {$ent_info};";
    $cfg_cache_dir = ROOT_PATH.'/libs/cache';
    $cfg_cache_filepath = $cfg_cache_dir .'/ent_info.php';
    if (!file_exists($cfg_cache_dir)){
        mkdir($cfg_cache_dir, 0777, true);
    }
    if (file_exists($cfg_cache_dir) && is_writeable($cfg_cache_dir))
    {
        file_put_contents($cfg_cache_filepath, $config_content);
    }

    echo "<script>alert('网站配置保存成功！'); window.location.href='/admin/config.php'; </script>";
    exit;
}
