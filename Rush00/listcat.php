<?php 
session_start();
if ($_SESSION['loggued_on_group'] == "admin")
{
	if (file_exists("./private/cat"))
	{
		$tab = unserialize(file_get_contents('./private/cat'));
	}
	else
		$tab = array(array("name" =>"NAME"));
	foreach ($tab as $str)
	{
		if ($str["active"] == 1)
			echo '<div class="name"><b>'.$str['name'].'</b></div></br>';
	}
}
?>
