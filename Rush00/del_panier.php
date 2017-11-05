<?php
require_once "product.php";
require_once "panier.php";
if(session_start() && $_POST["submit"])
{
	$select = $_SESSION["panier"][$_POST["indice"]];
	$_SESSION["panier"] = array_diff($_SESSION["panier"] , array($select));
	header('Location: index.php');
}
header('Location: index_panier.php');
?>
