<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>NOM_DU_SITE</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">	
	<link rel="icon" href="" type="image/x-icon">
	<link rel="icon" href="./img/favicoon.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<?php?>
<header>
<div id="BG">
	BIENVENUE DANS VOTRE CINEMA PERSONEL
		<ul id="menu">
		<li>
			<a href="#">GENRE</a>
			<ul class="sous_menu">
<?php
		file_put_contents("./private/cat", "", FILE_APPEND);
		$tab = unserialize(file_get_contents("./private/cat"));
		if (file_exists("./private/cat"))
		{
			$tab = unserialize(file_get_contents('./private/cat'));
		}
		array_push($tab, array("name" =>"Toutes categories"));
		foreach ($tab as $str)
		{
			echo '<li><a href="index.php?cat='.$str["name"].'">'.$str["name"].'</a></li>';
		}
?></ul>
		</li>
		<li>
			<a href="index_panier.php">Panier</a>
		</li>
	</ul>
<div id ="log">
<?php if(!$_SESSION['logged_on_user'] || !$_SESSION['logged_on_group'])
include "log.php";
?></div>
</header>
</body>
<?php
?>
