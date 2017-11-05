<?php
if (session_start())
{
	$_SESSION['loggued_on_user'] = "";
	$_SESSION['loggued_on_group'] = "";
	$_SESSION['id'] = 0;
	header('Location: index.php');
}
?>
