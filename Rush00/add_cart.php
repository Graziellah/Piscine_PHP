<?php
header('Location: index.php');
require_once "product.php";
require_once "panier.php";
if(session_start())
{
	$select=array('title' => get_name_from_id($_POST["id"]),'quantite' => $_POST["nb"], 'prix'  => get_price_from_id($_POST["id"]), 'id' => $_POST["id"]);
	ajout($select);
	
}
?>
