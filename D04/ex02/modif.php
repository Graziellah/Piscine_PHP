<?php
	$dir_path = "../htdocs/private/";
	$file_path = "../htdocs/private/passwd";
	$message = "";

	function	pw_modify($account, $user)
	{
		if ((array)$account != "0" && $user != "0")
		{
			foreach($account as $key => &$value)
			{
				if(($value['login'] == $user['login']) && ($value['passwd'] == $user['oldpw']))
				{
					$account[$key]['passwd'] = $user['newpw'];
					echo "OK\n";
					return ($account);
				}
			}
			echo "ERROR\n";
			return ($account);
		}
	}
	if ($_POST['submit'] == 'OK' && ($_POST['login'] || $_POST['login'] != "0") && ($_POST['oldpw'] || $_POST['oldpw'] != "0")&& ($_POST['newpw'] || $_POST['newpw'] != "0"))
	{
		if(file_exists($dir_path) == false)
		{
			mkdir ("../htdocs");
			mkdir($dir_path);
			$account = array();
		}
		$account = unserialize(file_get_contents($file_path));
		$user = array(
			"login" => $_POST['login'],
			"oldpw" => hash("whirlpool", $_POST['oldpw']),
			"newpw" => hash("whirlpool", $_POST['newpw']));
		$account = pw_modify($account, $user);
		file_put_contents($file_path, serialize($account));
	}
	else
		echo "ERROR\n";
?>
