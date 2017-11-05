<?php
if ($_SESSION['loggued_on_user'] == "")
{?>
	Login
	<form action="login.php" method="POST">
		<input type="text" name="login" placeholder="Identifiant"/> 
		<br \>
		<input type ="password" name="passwd" placeholder="Mot de passe"/>
		<input type="submit" name="submit" value="OK">
	</form>
	<a href="create.php">Creez votre compte</a><br />
<?php
}
else
{
	echo "<p>Bonjour ".$_SESSION["loggued_on_user"]."</p>";?>
	<form action="logout.php" method="POST">
		<input type="submit" name="logout" value="logout" class="bouton_logout">
	</form>
<?php
}?>
