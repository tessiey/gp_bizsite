<?
require_once "./libs/common.php";
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href=/assets/css/css.css />
</head>
<body>

<div id='box'>
    <? include ("head.php");?>
	<div class="con clearfix">
		<div class="lefts">
				<ul>
					<li class="pro_tit"><img src="/assets/images/icon5.jpg" title="产品推荐"/></li>
					<?
						$prosql="select * from pro order by id desc limit 0,20";
						$proquery=mysqli_query($conn, $prosql);
						while($prorow=mysqli_fetch_array($proquery))
						{
                        ?>
                            <li class="news">
                            <a href=proshow.php?proid=<?=$prorow['id']?>>
                                <?= mb_substr($prorow['product_name'],0,40);?>...</a>
                            </li>
                    <?
						}
					?>

				</ul>
		</div>

		<div class="rights padd">
			<?
			if($_GET['proid'])
			{
			 $proid=$_GET['proid'];
			 $projssql="select * from pro where id='".$proid."'";
			 $projsquery=mysqli_query($conn, $projssql);
			 $projsrow=mysqli_fetch_array($projsquery);
			 echo "<br>　　".$projsrow['product_intro']."<br><br>";
			 echo "<img src=admin/uploadimg/".$projsrow['product_pic']." alt=".$projsrow['product_name'].">";
			}
			else
			{
				$prosql="select * from pro order by id desc";
				$proquery=mysqli_query($conn, $prosql);
				while($prorow=mysqli_fetch_array($proquery))
				{
					echo "
    <div class=pro_item>
        <a class='img' href=proshow.php?proid=".$prorow['id'].">
        <img src=admin/uploadimg/".$prorow['product_pic']." width=100 height=100 alt=".$prorow['product_name']." /></a>
        <a class='tit' href=proshow.php?proid=".$prorow['id']." title=".$prorow['product_name'].">".mb_substr($prorow['product_name'],0,18)."</a>
	</div>";
				}
			}
			?>
		</div>
	</div>
</div>

<div id="box"><?php include ("foot.php"); ?></div>
</body>
</html>
