<?php
require_once "./libs/common.php";

$sql="select * from ent_info";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
<div class="foot">
 	<ul>
 		<li><? echo $row['name']?>　版权所有</li>
 		<Li>地址：<? echo $row['address']?>　电话：<? echo $row['tel']?>　备案证编号：<? echo $row['icp']?> </li>
 	</ul>
</div>
