<?php
require_once "user.php";
if (session_start() && $_SESSION['loggued_on_group'] != NULL && $_SESSION['loggued_on_group'] == "admin")
{
	if ($_POST['submit'] == "Ajouter" && htmlspecialchars($_POST["login"]) != NULL && htmlspecialchars($_POST["passwd"]) != NULL && htmlspecialchars($_POST["group"]) != NULL)
	{
		$login = htmlspecialchars($_POST['login']);
		$pass = hash('whirlpool', hash('md5',$login).htmlspecialchars($_POST['passwd']));
		add_user($login, $pass, $_POST["group"]);
	}
	if ($_POST['submit'] == "Modifier" && $_POST['field'] != "login" && $_POST['field'] != 'passwd' && $_POST['field'] != "id")
		mod_user($_POST['id'], $_POST['field'], $_POST['value']);
	if ($_POST['submit'] == "Supprimer" && $_POST['id'] != NULL)
		del_user($_POST['id'])
?>

<html>
<script langage="javascript">top.frames['user'].location ='listusr.php';</script>
<head></head>
<body>
	<form method="POST" action="modif.php">  
		<input type="text" name="login" value ="" required="required" placeholder="login"/>
		<input type="text" name="passwd" value ="" required="required" placeholder="passwd"/>
		<input type="text" name="group" value ="" required="required" placeholder="group"/>
		<input type="submit" name="submit" value="Ajouter">
	</form>
	<form method="POST" action="modif.php">  
		<input type="text" name="id" value ="" placeholder="ID"/>
		<input type="text" name="field" value ="" placeholder="field"/>
		<input type="text" name="value" value ="" placeholder="new value"/>
		<input type="submit" name="submit" value="Modifier">
	</form>
	<form method="POST" action="modif.php">  
		<input type="text" name="id" value ="" placeholder="ID"/>
		<input type="submit" name="submit" value="Supprimer">
	</form>
</body>
</html>
<?php
}
?>
