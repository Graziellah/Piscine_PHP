<?php

if (!file_exists("./private") || !is_dir("./private"))
{
	mkdir("private");
	$tab = array(array("login" => "admin", "group" => "admin", "id" => "1", "passwd" => hash('whirlpool', hash('md5',"admin")."admin"), "active" => 1));
	file_put_contents("./private/account", serialize($tab));
	$tab = array(array("name" => "Name", "active" => 1));
	file_put_contents("./private/cat", serialize($tab));
	$tab = array(array("id"=> uniqid(), "article" => array(array(0, 4)), "user" => "personne", "active" => 1, "time" => time(), "total" => 0));
	file_put_contents("./private/com", serialize($tab));
	session_start();
	session_unset();
	session_start();
	$_SESSION["panier"] = array();
	$_SESSION['loggued_on_user'] = "";
	$_SESSION['loggued_on_group'] = "";
	$_SESSION['id'] = 0;
}

?>
