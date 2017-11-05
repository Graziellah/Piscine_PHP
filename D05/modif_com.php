<?php
require_once "com.php";
if (session_start() && $_SESSION['loggued_on_group'] != NULL && $_SESSION['loggued_on_group'] == "admin")
{
	if ($_POST['submit'] == "Supprimer")
		del_com($_POST['id']);
?>

<html>
<script langage="javascript">top.frames['com'].location ='listcom.php';</script>
<head></head>
<body>
	<form method="POST" action="modif_com.php">  
		<input type="text" name="id" value ="" placeholder="id"/>
		<input type="submit" name="submit" value="Supprimer">
	</form>
</body>
</html>
<?php
}
?>
