<?php
	include("auth.php");
	session_start();
	if(auth($_GET['login'], $_GET['passwd']) == true)
	{
		$_SESSION['logged_on_user'] = $_GET['login'];
		echo "OK\n";
	}
	else
	{
		$_SESSION['logged_on_user'] = "";
		echo "ERROR\n";
	}
?>
