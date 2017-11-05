<?php
function ft_is_sort($tab)
{
	$test = $tab;
	sort($tab);
	$result = array_diff_assoc($tab, $test);
	if (count($result > 0))
		return false;
	else return true;}
?>
