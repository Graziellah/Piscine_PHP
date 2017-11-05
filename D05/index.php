<?php include "install.php";?>
<?php include "header.php";?>
<div>
<?php
	$tab = unserialize(file_get_contents('./private/product'));
	sort($tab);
	foreach ($tab as $str)
	{
		if ($str['active'] == 1 && (!$_GET["cat"] || ($_GET["cat"] && preg_match("/".$_GET["cat"]."/", $str['cat'])) || $_GET["cat"] == "Toutes categories") && $str['stock'] > 0)
		{
			echo '<div class="prod"><div class="name"><b> TITRE:'.$str['name'].'</b></div>'. ' <img src="' .$str['img'] . ' />' . ' <div class = "price">Prix:' .$str['price']. '$ </div>' . ' <div class = "stock" > Stock ' . $str['stock'] . ' <div class="cat">'.$str['cat'].'</div></div>';
			echo '<form method="POST" action="add_cart.php">';
			echo '<select type="nb" name="nb" value ="" placeholder="0">';
			for($i = 1; $i < $str['stock'] && $i < 25; $i++) 
				echo '<option value="'.$i.'">'.$i.'</option>';
			echo '<input type="hidden" name="film" value="'.$str["id"].'">';
			echo '<input type="submit" name="submit" value="achetez">';
			echo '</form>';
		}
	}
?>
</div>
<?php include "footer.php";?>
