<?php
function new_id($tab)
{
	do
	{
		$id = uniqid();
		$end = 1;
		foreach($tab as $user)
		{
			if ($id == $user["id"] | $id == 0)
				$end = 0;
		}
	}while(!end);
	return ($id);
}
?>
