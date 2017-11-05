<?php 
include "utils.php";

function unknow($tab, $log)
{
	foreach ($tab as $ac)
	{
		if ($ac['login'] == $log)
				return (0);
	}
	return (1);
}
function check_active($id)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			if ($user["active"] == 1)
				return (1);
			else
				return (0);
		}
	}
	return (0);
}

function group_from_id($id)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			return ($user["group"]);
		}
	}
	return ("");
}

function check_admin($id)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			if ($user["groupe"] == "admin")
				return (1);
			else
				return (0);
		}
	}
	return (0);
}

function mod_user($id, $field, $value)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	if ($field == 'login')
		return (0);
	if ($id == 1)
		return (0);
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"] && array_key_exists($field, $tab[$key]))
		{
			$tab[$key][$field] = $value;
		}
	}
	file_put_contents("./private/account", serialize($tab));
}

function del_user($id)
{
	if ($id == 1)
		return (0);
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	foreach ($tab as $key => $user)
	{
		if ($id  == $user["id"])
		{
			$tab[$key]["active"] = 0;
		}
	}
	file_put_contents("./private/account", serialize($tab));
}

function add_user($login, $mdp, $groupe)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	if (unknow($tab , $login))
	{
	$id = new_id($tab);
	$tab[]= array("login" => $login, "group" => $groupe, "id" => $id, "passwd" => $mdp, "active" => 1);
	file_put_contents("./private/account", serialize($tab));
	}
}

?>
