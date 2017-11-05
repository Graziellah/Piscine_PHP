<?php
require_once "product.php";
if (session_start() && $_SESSION['loggued_on_group'] != NULL && $_SESSION['loggued_on_group'] == "admin")
{
	if ($_POST['submit'] == "Modifier" && $_POST['field'] && $_POST['value'] && $_POST["field"] != "id")
	{
		mod_prod($_POST['id'], $_POST['field'], $_POST['value']);
	}
	if($_POST['submit'] == "Ajouter" && $_POST['price'] > 0 && $_POST['stock'] > 0 && $_POST['img'])
		add_prod($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['img']);
	if($_POST['submit'] == "Supprimer")
		del_prod($_POST['id'])
?>

<html>
<script langage="javascript">top.frames['product'].location ='listprod.php';</script>
<head></head>
<body>
	<form method="POST" action="modif_prod.php" enctype="multipart/form-data" >  
		<input type="text" name="name" value ="" required="required" placeholder="Titre"/>
		<input type="number" name="price" value ="" required="required" placeholder="Prix"/>
		<input type="number" name="stock" value ="" required="required"placeholder="Stock"/>
		<input type="text" name="img" value ="" placeholder="Image"/>
		<input type="submit" name="submit" value="Ajouter">
	</form>
	<form method="POST" action="modif_prod.php" enctype="multipart/form-data">  
	<input type="text" name="id" value ="" placeholder="id"/>	
	<select type="text" name="field" value ="" placeholder="field">
			<option value="name">name</option>
			<option value="price">price</option>
			<option value="img">img</option>
			<option value="stock">stock</option>
			<option value="cat">cat</option>
			<option value="active">active</option>
		</select>
		<input type="text" name="value" value ="" placeholder="new value"/>
		<input type="submit" name="submit" value="Modifier">
	</form>
	<form method="POST" action="modif_prod.php" enctype="multipart/form-data" >  
		<input type="text" name="id" value ="" required="required" placeholder="ID"/>
		<input type="submit" name="submit" value="Supprimer">
	</form>
</body>
</html>
<?php
}
?>
