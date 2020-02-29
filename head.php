<?
require_once "./libs/common.php";
?>
<div id="box" style="background: #fff">
	<div id="top" class="clearfix">
		<ul>
			<li style="float:left;"><a href=/ ><img src="/assets/images/logo.png" width="188" height="48" alt=<? echo $row['name']?> /></a></li>
			<li class=soucang><span style="CURSOR: hand" mce_style="CURSOR: hand" onClick="window.external.addFavorite('<? echo $row['yuming']?>','<? echo $row['name']?>')" >加入收藏</span>　<a onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<? echo $row['yuming']?>')"  href="#" style="color:black;">设为首页</a></li>
		</ul>
	</div>
	<div id="daohang">
		<div class="dhang clearfix">
			<a href=/>首　页</a>　　
                <?
                $sql="SELECT * FROM site_nav";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                ?>
                    <a href=<? echo $row['url']?> ><? echo $row['name']?></a>　　
                <? } ?>
		</div>
	</div>
	<div><img src="/assets/images/banner.jpg" alt="" style="width: 900px;"></div>
</div>
