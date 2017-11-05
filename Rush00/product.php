<?php
require_once "utils.php";
function get_price_from_id($id)
{
	file_put_contents("./private/product", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/product"));
	foreach ($tab as $key => $prod)
	{
		if ($id == $prod["id"])
		return ($prod["price"]);
	}
	return (0);
}

function get_name_from_id($id)
{
	file_put_contents("./private/product", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/product"));
	foreach ($tab as $key => $prod)
	{
		if ($id == $prod["id"])
		return ($prod["name"]);
	}
	return (0);
}


function check_active_prod($id)
{
	file_put_contents("./private/product", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/product"));
	foreach ($tab as $key => $prod)
	{
		if ($id  == $prod["id"])
		{
			if ($prod["active"] == 1)
				return (1);
			else
				return (0);
		}
	}
	return (0);
}

function check_stock($id)
{
	file_put_contents("./private/product", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/product"));
	foreach ($tab as $key => $prod)
	{
		if ($id  == $prod["id"])
		{
			if ($prod["stock"] > 0)
				return (1);
			else
				return (0);
		}
	}
	return (0);
}

function mod_prod($id, $field, $value)
{
	file_put_contents("./private/product", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/product"));
	foreach ($tab as $key => $prod)
	{
		if ($id  == $prod["id"])
		{
			$tab[$key][$field] = $value;
		}
	}
	file_put_contents("./private/product", serialize($tab));
}

function del_prod($id)
{
	if(!file_exists("./private/product"))
	{
		file_put_contents("./private/product", "", FILE_APPEND);
		$tab = array();
	}
	$file = file_get_contents("./private/product");
	$tab = unserialize($file);
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			$tab[$key]["active"] = 0;
		}
	}
	file_put_contents("./private/product", serialize($tab));
}

function add_prod($name, $price, $stock, $img)
{
	if (!file_exists("./private/product"))
	{
		file_put_contents("./private/product", "", FILE_APPEND);
		$tab = array();
	}
	if(!file_exists("./private/pictures"))
		mkdir("./private/pictures");
	$file = file_get_contents("./private/product");
	$tab = unserialize($file);
	$id = new_id($tab);
	$tab[] = array("name" => $name, "price" => $price, "stock" => $stock, "img" => $img, "id" => $id, "active" => 1);
	file_put_contents("./private/product", serialize($tab));
}
?>
