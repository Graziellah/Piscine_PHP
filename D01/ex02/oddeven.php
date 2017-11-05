#!/usr/bin/php
<?php
	while(1)
	{
		print("Entrez un nombre: ");
		$reponse = fgets(STDIN);
		if (feof(STDIN))
		{
			echo "\n";
			break ;
		}
		//$reponse = fgets(STDIN);
		$reponse = trim($reponse);
		if (is_numeric($reponse))
		{
			if(!($reponse % 2))
			print("Le chiffre ".$reponse." est Pair\n");
			else
			print("Le chiffre ".$reponse." est Impair\n");
		}
		else
			print("'".$reponse."' n'est pas un chiffre\n");
	}
?>
