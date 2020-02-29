<?
require_once "./libs/common.php";
?>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href=/assets/css/css.css />
</head>
<body>
	    <?php
    include ("head.php");

    $newssql="select * from news order by id desc limit 0,10";
    $newsquery=mysqli_query($conn, $newssql);
    ?>

	<div class="con">
		<img src="/assets/images/icon3.jpg" title="联系我们 " style="margin-top: 15px"/>
		<ul>
			<li style="margin:-5px 5px 5px;">qq：<? echo $ent_info['qq']?></li>
			<li style="margin:5px;">电话：<? echo $ent_info['tel']?></li>
			<li style="margin:5px;">传真：<? echo $ent_info['chuanzhen']?></li>
			<li style="margin:5px;">邮箱：<? echo $ent_info['email']?></li>
			<li style="margin:5px;">业务部负责人：<? echo $ent_info['yewuname']?></li>
			<li style="margin:5px;">地址：<? echo $ent_info['address']?></li>
			<li style="margin:15px;font-weight:bold;"><? echo $ent_info['name']?></li>
		</ul>
	</div>

	<div id="box"><? include ("foot.php");?></div>
</body>
</html>
