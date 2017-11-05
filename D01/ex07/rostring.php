#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", $str);
	$array_space = array_keys($tab, "");
	$array_space = array_reverse($array_space);
	foreach($array_space as $elemen)
		array_splice($tab, $elemen, 1);
	return ($tab);
}
	if ($argc != 2)
		feof(STDIN);
	$tab = $argv[1];
	$tab = trim($tab);
	$param = ft_split($tab);
	$nb = count($param);
	$first = $nb;
//	$param = array_reverse($param);
	foreach($param as $elemen)
	{
		if ($nb == $first)
			$str = $elemen;
		else
			print_r($elemen . " ");
	//	else
	//		print_r($elemen . "\n");
		$nb--;
	}
	print_r($str . "\n");
?>
