<?
require_once "./libs/common.php";
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/css.css"/>
</head>
<script language=javascript>
    function Checkly() {
        if (lyform.lyname.value == "") {
            alert('请填写姓名');
            lyform.lyname.focus();
            return false;
        }
        if (lyform.lycontent.value == "") {
            alert('请填写内容');
            lyform.lyname.focus();
            return false;
        }
        if (lyform.lytitle.value == "") {
            alert('请填写标题');
            lyform.lyname.focus();
            return false;
        }
    }
</script>
<body>
<div id="box"><? include("head.php"); ?></div>
    <?
    require_once "./libs/common.php";
    $sql = "insert into liuyan (name,title,email,content,time) values ('" . $_POST['lyname'] . "','" . $_POST['lytitle'] . "','" . $_POST['lyemail'] . "','" . $_POST['lycontent'] . "',now())";
    mysqli_query($conn, $sql);
    ?>
    <div id="box" class="con">
        <ul class="book">
            <form name="lyform" method="POST" action="" onsubmit="return Checkly();">
                <li><span>姓名：</span><input type="text" name="lyname" maxlength="" ="10"></li>
                <li><span>邮箱：</span><input type="text"name="lyemail" maxlength="" ="20"></li>
                <li><span>标题：</span><input type="text" name="lytitle" maxlength="" ="100"></li>
                <li><span>留言：</span><textarea value="在这里输入您的留言" name="lycontent" cols=25 rows="10" maxlength="1000" maxlength="" ="1000"></textarea></li>　　　
                <input type="submit" value="提交留言" class="btn-sub">
            </form>
        </ul>
    </div>
    <div id="box"><? include("foot.php"); ?></div>
</body>
</html>
