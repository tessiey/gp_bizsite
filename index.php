<?php
require_once "./libs/common.php";
?>
<html>
<head>
<title><?=$ent_info['name']?> - 网站首页</title>
<link rel="stylesheet" type="text/css" href=/assets/css/css.css />
</head>
<body>
<div id="box" class="clearfix">
    <?php
    include ("head.php");

    $newssql="select * from news order by id desc limit 0,10";
    $newsquery=mysqli_query($conn, $newssql);
    ?>
	<div class="wrapper con clearfix">
	<div class="lefts">
			 <div>
                 <ul>
                     <li class="news_tit"><img src="/assets/images/icon1.jpg" title=" 企业新闻" /></li>
					<?
					while($newsrow=mysqli_fetch_array($newsquery))
					 {
					?>
					    <li class=news>
                            <a href=sitenews.php?newsid=<? echo $newsrow['id']?>>
                                <? echo mb_substr($newsrow['title'],0,12);?>
                                <?= mb_strlen($newsrow['title']) > 13 ? "..." : "" ?>
                            </a>
                        </li>
					<?
					 }
					?>
				</ul>
			 </div>

			<div>
			 	<ul>
			 		<li><img src="/assets/images/icon3.jpg" title="联系我们 " style="margin-top: 15px"/></li>
					<li style="margin:-5px 5px 5px;">qq：<? echo $ent_info['qq']?></li>
					<li style="margin:5px;">电话：<? echo $ent_info['tel']?></li>
					<li style="margin:5px;">传真：<? echo $ent_info['chuanzhen']?></li>
					<li style="margin:5px;">邮箱：<? echo $ent_info['email']?></li>
					<li style="margin:5px;">业务部负责人：<? echo $ent_info['yewuname']?></li>
					<li style="margin:5px;">地址：<? echo $ent_info['address']?></li>
					<li style="margin:15px;font-weight:bold;"><? echo $ent_info['name']?></li>
				</ul>
			 </div>
	</div>
	<div class="rights">
		<div>
			<ul>
				<li class="h12"><img src="/assets/images/icon2.jpg" title="公司简介"/>　</li>
				<li class="meta">　<img src="/assets/images/img_c.jpg" />　　老王土特产有限公司成立于2020年1月20日，注册于吉林省长春市。经营范围包括传统滋补品，主要是以长白山的特产为主,经营的产品有野山参、山参、保鲜参、生晒参、人参片、红参、红参片、西洋参、西洋参片、鹿茸、鹿茸片、鹿鞭、林蛙油、天麻、五味子、枸杞等。企业以严谨、科学、负责的态度进行研发与生产；以“守信、合作、持恒”为宗旨；以“进入家庭，增进健康”为目标；以电商平台和全国各地的经销商为通路，把我公司的产品送到千家万户，为客户带来绿色与健康。

<br>&emsp;&emsp;2020年9月，老王土特产有限公司天猫旗舰店正式上线运营，开店仅一个月，拳头产品长白山天麻即成为淘宝全网销售冠军，月销量几千盒，华成电商就此拉开了辉煌的大幕，目前华成旗下拥有线下门店25家、网店6家，所经营的山参、灵芝孢子粉、鹿茸等一系列产品，受到广大买家的喜爱，积累了几十万老客户。</li>
			</ul>
		</div>
		<div class="pro">
			<ul>
				<li class="h12"><img src="/assets/images/icon4.jpg" title="产品推荐"/></li>
				<li>
					<?
					$prosql="select * from pro order by id desc limit 0,8";
					$proquery=mysqli_query($conn,$prosql);
					while($prorow=mysqli_fetch_array($proquery))
					{
						echo "<div class=protu><div class=protuku><a href=proshow.php?proid=".$prorow['id'].">
						<img src=admin/uploadimg/".$prorow['product_pic']." width=110 height=110 alt=".$prorow['product_name']." /></a>
						</div>
						<div class=prozi>
<a href=proshow.php?proid=".$prorow['id']." title=".$prorow['product_name'].">".mb_substr($prorow['product_name'],0,18)."</a>
</div></div>";
					}
				  ?>
				</li>
		</div>
	</div>
</div>
<div id="box" class="link_wrap">
	<span>友情链接:</span>
	<div class="link clearfix">
		<?
		 $linksql="select * from link";
		 $linkquery=mysqli_query($conn,$linksql);
		 while($linkrow=mysqli_fetch_array($linkquery))
		 {
		 	echo "<a href=".$linkrow['linkurl']." target=_blank>".$linkrow['linktitle']."</a>　";
		 }
		?>
	</div>
</div>
<div id="box"><?php include ("foot.php"); ?></div>
</body>
</html>
