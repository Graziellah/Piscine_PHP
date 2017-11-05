<?php

include "user.php";
if (htmlspecialchars($_POST['passwd']) != htmlspecialchars($_POST['passwd_conf']))
{
	header('Location: index.php');
	echo "ERROR\n";
}
else if (htmlspecialchars($_POST['login']) != NULL && htmlspecialchars($_POST['passwd']) != NULL &&  htmlspecialchars($_POST['passwd']) != NULL  && $_POST['submit'] && $_POST['submit'] == "OK")
{
	$tab = unserialize(file_get_contents("./private/account"));
	if (unknow($tab, $_POST['login']))
	{
		$login = htmlspecialchars($_POST['login']);
		$pass = hash('whirlpool', hash('md5',$login).htmlspecialchars($_POST['passwd']));
		add_user($login, $pass, "user");
		header('Location: index.php');
	}
}
?>

<html>
<style>
	form{
	margin-left:50%;
}
</style>
<body>
<form action="create.php" method="POST">
	Veuillez choissssir un identifiant</br>
	<input type="text" required="required" name="login" placeholder="Identifiant"/> 
	<br />
	Veuillez saisir un mot passe:</br>
	<input type ="password" name="passwd" required="required" placeholder="Mot de passe"/>
	<br/>
	Veuillez saisir de nouveau votre mot de passe:</br>
	<input type ="password" name="passwd_conf" placeholder="Confirmation"/><br/>
	</br>
	<input type="submit" name="submit" value="OK">
</form>
</body>
</html>
