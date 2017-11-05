<?php
require_once "utils.php";
function mod_com($id, $field, $value)
{
	file_put_contents("./private/com", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/com"));
	foreach ($tab as $key => $cat)
	{
		if ($name  == $cat["id"])
		{
			$tab[$key][$field] = $value;
		}
	}
	file_put_contents("./private/com", serialize($tab));
}

function del_com($id)
{
	if(!file_exists("./private/com"))
	{
		file_put_contents("./private/com", "", FILE_APPEND);
		$tab = array();
	}
	$file = file_get_contents("./private/com");
	$tab = unserialize($file);
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			$tab[$key]["active"] = 0;
		}
	}
	file_put_contents("./private/com", serialize($tab));
}

function add_com($panier, $user)
{
	$article = array();
	$total = 0;
	foreach($panier as $sys)
	{
		array_push($article, array($sys["id"], $sys["quantite"]));
		$total += $sys["quantite"] * $sys["price"];
	}
	$file = file_get_contents("./private/com");
	$tab = unserialize($file);
	$tab[] = array("id" => new_id($tab), "article" => $article, "user" => $user, "active" => 1, "time"=>time(), "total"=> $total);
	file_put_contents("./private/com", serialize($tab));
}
?>
