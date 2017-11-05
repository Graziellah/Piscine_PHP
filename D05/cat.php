<?php

function mod_cat($name, $value)
{
	file_put_contents("./private/cat", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/cat"));
	foreach ($tab as $key => $cat)
	{
		if ($name  == $cat["name"])
		{
			$tab[$key]["name"] = $value;
		}
	}
	file_put_contents("./private/cat", serialize($tab));
}

function del_cat($name)
{
	if(!file_exists("./private/cat"))
	{
		file_put_contents("./private/cat", "", FILE_APPEND);
		$tab = array();
	}
	$file = file_get_contents("./private/cat");
	$tab = unserialize($file);
	foreach ($tab as $key => $user)
	{
		if ($name  == $user["name"])
		{
			$tab[$key]["active"] = 0;
		}
	}
	file_put_contents("./private/cat", serialize($tab));
}

function add_cat($name)
{
	if (!file_exists("./private/cat"))
	{
		file_put_contents("./private/cat", "", FILE_APPEND);
		$tab = array();
	}
	$file = file_get_contents("./private/cat");
	$tab = unserialize($file);
	foreach ($tab as $key)
		if($key['name'] ==  $name)
		{
			echo '<script type="text/javascript"> window.alert("Categorie deja presente");</script>';
			file_put_contents("./private/cat", serialize($tab));
			return (0);
		}
	$tab[] = array("name" => $name , "active" => 1);
	file_put_contents("./private/cat", serialize($tab));
}
?>
