<?php
require_once "cat.php";
if (session_start() && $_SESSION['loggued_on_group'] != NULL && $_SESSION['loggued_on_group'] == "admin")
{
	if ($_POST['submit'] == "Ajouter")
			add_cat($_POST['name']);
	if ($_POST['submit'] == "Modifier")
		mod_cat($_POST['name'], $_POST['value']);
	if ($_POST['submit'] == "Supprimer")
		del_cat($_POST['name']);
?>

<html>
<script langage="javascript">top.frames['cat'].location ='listcat.php';</script>
<head></head>
<body>
	<form method="POST" action="modif_cat.php">  
		<input type="text" name="name" value ="" placeholder="Name"/>
		<input type="submit" name="submit" value="Ajouter">
	</form>
	<form method="POST" action="modif_cat.php">  
		<input type="text" name="name" value ="" placeholder="Name"/>
		<input type="text" name="value" value ="" placeholder="New value"/>
		<input type="submit" name="submit" value="Modifier">
	</form>
	<form method="POST" action="modif_cat.php">  
		<input type="text" name="name" value ="" placeholder="Name"/>
		<input type="submit" name="submit" value="Supprimer">
	</form>
</body>
</html>
<?php
}
?>
