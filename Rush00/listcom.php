<?php 
session_start();
require_once "product.php";
if ($_SESSION['loggued_on_group'] == "admin")
{
	if (file_exists("./private/com"))
	{
		$tab = unserialize(file_get_contents('./private/com'));
	}
	else
		$tab = array(array("id" => uniqid(), "article" => array(array(0, 4)), "user" => "personne", "time" => time(), "total" => 0));
	foreach ($tab as $str)
	{
		if ($str["active"] == 1)
		{
			echo "<b>[".date('H:i', $str['time']).']</b> '.$str['user'].": ";
			foreach ($str['article'] as $art)
			{
				echo get_name_from_id($art[0]).' x '.$art[1].' ';
			}
			echo $str["total"].' '.$str["id"].'</br>';
		}
	}
}
?>
