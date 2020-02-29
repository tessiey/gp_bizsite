<?php
require_once "./libs/common.php";
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/css.css"/>
</head>
<body>
<div id="box"><? include("head.php"); ?></div>

<div id="box" class="link_wrap">
    <span>友情链接:</span>
    <div class="link">
        <?
        $linksql = "select * from link";
        $linkquery = mysqli_query($conn, $linksql);
        while ($linkrow = mysqli_fetch_array($linkquery)) {
            echo "<a href=" . $linkrow['linkurl'] . " target='_blank'>" . $linkrow['linktitle'] . "</a>　";
        }
        ?>
    </div>
</div>

<div id="box"><? include("foot.php"); ?></div>
</body>
</html>
