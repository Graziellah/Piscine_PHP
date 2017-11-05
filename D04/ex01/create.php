<?php
	$dir_path = "../htdocs/private/";
	$file_path = "../htdocs/private/passwd";
	$message = "";

	function	is_not_duplicate($account, $user)
	{
		foreach((array)$account as $key)
			if($key['login'] == $user['login'])
				return (false);
		return (true);
	}

	if ($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['passwd'])
	{
		$message = "OK\n";
		if (!file_exists("../htdocs/"))
			mkdir ("../htdocs");
		if(!file_exists($dir_path))
			mkdir($dir_path);
		if(!file_exists($file_path))
			$account = array();
		else
			$account = unserialize(file_get_contents($file_path));
		$user = array(
			"login" => $_POST['login'],
			"passwd" => hash("whirlpool", $_POST['passwd']));
		if(is_not_duplicate($account, $user) == true)
		{
			$account[] = $user;
			file_put_contents($file_path, serialize($account));
		}
		else
			$message ="ERROR\n";
	}
	else
		echo "ERROR\n";
	echo$message;
?>
