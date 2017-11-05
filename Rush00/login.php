<?php

include 'auth.php';
include 'user.php';
session_start();

$login = htmlspecialchars($_POST['login']);
$passw = htmlspecialchars($_POST['passwd']);

if ($login != NULL && $passw != NULL  && ($id = auth($login, $passw)))
{
	$_SESSION['loggued_on_user'] = $login;
	$_SESSION['loggued_on_group'] = group_from_id($id);
	$_SESSION['id'] = $id;
}
else
{
	$_SESSION['loggued_on_user'] = "";
	$_SESSION['loggued_on_group'] = "";
	$_SESSION['id'] = 0;
}
header('Location: index.php');
?>
