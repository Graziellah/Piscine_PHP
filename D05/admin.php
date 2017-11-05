<?php
include "user.php";
include "product.php";
session_start();
if ($_SESSION['loggued_on_group'] == "admin")
{
?>
<html>
	<link rel="stylesheet" type="text/css" href="./css/admin.css">
<body>
	<div id="banniere_BO">Back-office
		<div id="logout">
			<a href="logout.php"><img src="img/logout.png" alt="Logout"></a>
		</div>
		<div id="user">
			<a href="index.php"><img src="img/users.png" alt="Page clients"></a>
		</div>
	</div>
	<iframe name="user" src="listusr.php" width="100%" height=550px></iframe>
	<iframe name="modif" src="modif.php" width="100%" height=115px></iframe>
	<iframe name="product" src="listprod.php" width="100%" height=550px></iframe>
	<iframe name="modif_prod" src="modif_prod.php" width="100%" height=115px></iframe>
	<iframe name="cat" src="listcat.php" width="100%" height=550px></iframe>
	<iframe name="modif_cat" src="modif_cat.php" width="100%" height=115px></iframe>
	<iframe name="com" src="listcom.php" width="100%" height=550px></iframe>
	<iframe name="modif_com" src="modif_com.php" width="100%" height=115px></iframe>
</body>
</html>
<?php
}
if (!($_SESSION['loggued_on_group'] == "admin"))
{
	header('Location: index.php');
}
?>
