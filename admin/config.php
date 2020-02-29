<?
require_once "../libs/admin_auth.php";
require_once "../libs/common.php";

$sql="select * from ent_info";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

?>
<link rel="stylesheet" type="text/css" href=/assets/css/adcss.css>
<link rel="stylesheet" type="text/css" href=/assets/font/iconfont.css>
<form method=POST action="/mvc.php?act=admin/entinfo_modify" class="form config">
	<span class="bread"><i class="iconfont  icon-flag"></i>网站配置：</span>
	<ul class="list">
		<li><span>QQ号码 ：</span><input placeholder="请输入QQ号码" type='text' name='qq' value=<?=$row['qq']?> ></li>
		<li><span>电话号码：</span><input placeholder="请输入电话号码" type='text' name='tel' value=<?=$row['tel']?>></li>
		<li><span>传真号码：</span><input placeholder="请输入传真号码" type='text' name='chuanzhen' value=<?=$row['chuanzhen']?>></li>
		<li><span>公司地址：</span><input placeholder="请输入公司地址" type='text' name='address' value=<?=$row['address']?>></li>
		<li><span>邮箱地址：</span><input placeholder="请输入邮箱地址" type='text' name='email' value=<?=$row['email']?>></li>
		<li><span>业务负责人：</span><input placeholder="请输入业务负责人" type='text' name='yewuname' value=<?=$row['yewuname']?>></li>
		<li><span>备案号：</span><input placeholder="请输入备案号" type='text' name='icp' value=<?=$row['icp']?>></li>
		<li><span>企业名称：</span><input placeholder="请输入企业名称" type='text' name='name' value=<?=$row['name']?>></li>
		<li><span>网站域名：</span><input placeholder="请输入网站域名" type='text' name='yuming' value=<?=$row['yuming']?>></li>
	</ul>
	<input type='submit' value=修改网站配置 name='submit' class="btn-sub">
</form>
