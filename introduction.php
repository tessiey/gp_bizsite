<?
require_once "./libs/common.php";
?>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href=/assets/css/css.css />
</head>
<body>
	<div id="box"><?php
    include ("head.php");

    $newssql="select * from news order by id desc limit 0,10";
    $newsquery=mysqli_query($conn, $newssql);
    ?>
	</div>
	<div class="con ">
		<div class="padd">
			<div class="h12"><img src="/assets/images/icon2.jpg" title="公司简介"/>　</div>
			<p class="meta">　<img src="/assets/images/img_c.jpg" />　　百度推广是一种按效果付费的网络推广方式,用少量投入就可以给企业带来大量潜在客户,有效提升企业销售额和品牌知名度.占据近80%市场份额,百度是企业开展seo的首选安博英豪seo培训学院专业从事网络营销培训,网络SEO培训,电子商务培训,网络营销实战操作班,啊里巴巴资深讲师主讲,近年来为企业培养实战型网络营销人才近千人。<br>　　百度推广是一种按效果付费的网络推广方式,用少量投入就可以给企业带来大量潜在客户,有效提升企业销售额和品牌知名度.占据近80%市场份额,百度是企业开展seo的首选安博英豪seo培训学院专业从事网络营销培训,网络SEO培训,电子商务培训,网络营销实战操作班,啊里巴巴资深讲师主讲,近年来为企业培养实战型网络营销人才近千人。</p>
		</div>
	</div>

	<div id="box"><? include ("foot.php");?></div>
</body>
</html>
