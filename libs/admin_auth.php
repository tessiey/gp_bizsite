<?php
session_start();
if(empty($_SESSION['is_login']) || $_SESSION['is_login']!==true)
{
	header("location: /admin/login.php");
}