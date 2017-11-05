#!/usr/bin/php
<?php
$tab = array_shift($argv);
foreach($argv as $elemen)
{
	if ($elemen != $tab)
		print_r($elemen);
	echo "\n";
}
?>
