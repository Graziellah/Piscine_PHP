<?php
	function auth($login, $passwd)
	{
		$passwd = hash("whirlpool", $passwd);
		$file = file_get_contents("../htdocs/private/passwd");
		$account=unserialize($file);
		foreach((array)$account as $key)
		{
			if ($key['login'] == $login)
				if($key['passwd'] == $passwd)
					return true;
		}
		return(false);
	}
?>
