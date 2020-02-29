<?php
$act = $_REQUEST['act'];
if(empty($act)){
	header("location: /index.php");
	return ;
}


require_once "./libs/common.php";

$action_php = "./libs/actions/{$act}.php";

if(!file_exists($action_php)){
	die("HTTP 403 Forbidden.\r\n<br/> Server Can't Found File {$action_php} To Handle This Request.");
	return;
}

require_once $action_php;
