<?php
function ft_split($str)
{
	$tab = explode(" ", $str);
	sort($tab);
	$array_space = array_keys($tab, "");
	$nb = count($array_space);
	$nb_tab = count($tab) - $nb;
	$tab = array_reverse($tab);
	array_splice($tab, $nb_tab);
	sort($tab);
	return $tab;
}
?>
