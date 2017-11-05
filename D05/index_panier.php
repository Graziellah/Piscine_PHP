<?php include "header.php";?>
<div>
<?php
	session_start();
	$tab = unserialize(file_get_contents('./private/product'));
	sort($tab);
	$total = 0;
	foreach ($_SESSION["panier"] as $k => $art)
	{
		foreach ($tab as $str)
		{
			if ($str['active'] == 1 && $art["id"] == $str["id"])
			{
				echo '<div class="name"><b> TITRE:'.$str['name'].'</b></div>'. ' <div class ="img"> ' .$str['img'] . ' </div>' . ' <div class = "price">Prix:' .$str['price']. '$ </div>' . ' <div class = "stock" > Stock ' . $str['stock'] . ' <div class="cat">'.$str['cat'].'</div></br>';
				echo '<p>x'.$art["quantite"].' Soit:'.$art["prix"] * $art["quantite"].'</p>';
				$total += $art["prix"] * $art["quantite"];
				echo '<form method="POST" action="del_panier.php">';
				echo'<input type="submit" name="submit" value="delete">';
				echo'<input type="hidden" name="indice" value="'.$k.'">';
				echo '</form>';
			}
		}
	}
	echo "Total: ".$total."</br>";
?>
		<form method="POST" action="valide.php">
			<input type="submit" name="submit" value="validez">
		</form>
	<?php
?>
</div>
<?php include "footer.php";?>
