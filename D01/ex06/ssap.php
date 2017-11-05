#!/usr/bin/php
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
	if ($argc == 1)
		feof(STDIN);
	$prog_name = array_shift($argv);
	$argv = implode(" ", $argv);
	$tab = ft_split($argv);
	$nb = count($tab);
	foreach($tab as $elemen)
	{
		if ($nb > 1)
			print_r($elemen . "\n");
		else
			print_r($elemen);
		$nb--;
	}
?>

