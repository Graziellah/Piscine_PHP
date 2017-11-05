<?php

function auth($login, $passwd)
{
	file_put_contents("./private/account", "", FILE_APPEND);
	$tab = unserialize(file_get_contents("./private/account"));
	foreach ($tab as $i => $ac)
	{
		if ($ac['login'] == $login && $ac['active'])
		{
			if($ac['passwd'] == hash('whirlpool', hash('md5',$login).$passwd))
				return ($ac["id"]);
			else
				return (0);
		}
	}
	return (0);
}

?>
