<?php
session_start();
include("panier.php");
if(!isset($_SESSION['panier']))
{
	$_SESSION['panier']['title'] = array();
	$_SESSION['panier']['qualite'] = array();
	$_SESSION['panier']['duree'] = array();
	$_SESSION['panier']['prix'] = array();
}
if($_POST['Submit'] == "Supprimer")
	Supprimer_article($_SESSION['title'], $reindix == true);
if($_POST['Submit'] == "Ajouter")
	ajout($_SESSION['panier']);
?>
<html><body>
	<form method="post" action="panier.php">
		<input type="submit" name="submit" value="Supprimer">
		<input type="submit" name="submit" value="">
		<input type="submit" name="submit" value="">
		<input type="submit" name="submit" value="">
		<input type="submit" name="submit" value="">
	</form>
	<form>
		<input type="submit" name="submit" value="Acheter">
	</form>
</body></html>
