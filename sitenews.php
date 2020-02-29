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
					<li class="news_tit"><img src="/assets/images/icon1.jpg" title=" 企业新闻" /></li>
				<?

				$newssql="select * from news order by id desc limit 0,100";
				$newsquery=mysqli_query($conn, $newssql);
				while($newsrow=mysqli_fetch_array($newsquery))
				{
				?>
                    <li class="news">
                        <a href="sitenews.php?newsid=<?=$newsrow['id']?>">
                            <? echo mb_substr($newsrow['title'],0,12);?>
                            <?= mb_strlen($newsrow['title']) > 13 ? "..." : "" ?>
                        </a>
                    </li>
				<?
				}
				?>
				</ul>
		</div>

		<div class="rights">
			<?
			if($_GET['newsid'])
			{
                 $newsid=intval($_GET['newsid']);
                 $sql="SELECT * FROM news WHERE id={$newsid}";
                 $query=mysqli_query($conn, $sql);
                 $newsrow=mysqli_fetch_array($query);
                 echo "<h2 class='news_title'>{$newsrow['title']}</h2><div  class='news_content'>{$newsrow['content']}</div><span  class='news_time'>{$newsrow['time']}</span>";
			}
			else
			{
                $sql="select * from news order by id desc";
                $query=mysqli_query($conn, $sql);
				while($newsrow=mysqli_fetch_array($query))
				{
				?>
                    <div class="item clearfix">
                        <img src=/assets/images/arr.gif >
                        <a href="sitenews.php?newsid=<?=$newsrow['id']?>">
                            <? echo mb_substr($newsrow['title'],0,60);?>
                            <?= mb_strlen($newsrow['title']) > 61 ? "..." : "" ?>
                        </a>
                        <span class="time"><?=$newsrow['time']?></span>
                    </div>
				<?
				}
			}
			?>
		</div>
	 </div>
</div>
<div id="box"><?php include ("foot.php"); ?></div>
</body>
</html>
