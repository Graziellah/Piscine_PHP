<?php
function ajout($select)
{
	$end = 1;
	foreach($_SESSION['panier'] as $k => $art)
	{
		if ($art["id"] == $select["id"])
		{
			$end = 0;
			$_SESSION["panier"][$k]["quantite"] += $select["quantite"];
		}
	}
	if ($end)
		array_push($_SESSION['panier'],$select);
	echo '</br>';
}
?>
