<?php
require_once "com.php";
session_start();
	if ($_SESSION['loggued_on_user'] == "")
	{?>	Veuillez vous connectez ou creer un compte pour valide.
	<form action="login.php" method="POST">
		<input type="text" name="login" placeholder="Identifiant"/> 
		<br \>
		<input type ="password" name="passwd" placeholder="Mot de passe"/>
		<input type="submit" name="submit" value="OK">
	</form>
	<a href="create.php">Creez votre compte</a><br /><?php
	}
	else
	{
		$panier = $_SESSION["panier"];
		$user = $_SESSION["loggued_on_user"];
		add_com($panier, $user);
		$_SESSION["panier"] = array();
	}
header('Location: index_panier.php');
?>
