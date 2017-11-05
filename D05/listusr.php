<?php 
session_start();
if ($_SESSION['loggued_on_group'] == "admin")
{
	$tab = unserialize(file_get_contents('./private/account'));
	echo '<table>
		<thead>
			<tr>
				<th width=33% > Login</th>
				<th width=33%> Groups</th>
				<th width=33%> ID</th>
			</tr>
		</thead>
		<tbody>';
	foreach ($tab as $str)
	{
		echo '<tr>';
		if ($str['active'] == 1)
		{
			echo '<th class="log">'.$str['login'].'</th><th class="group">'.$str['group'].'</th><th class="id">'.$str['id']."</th></br>";

		}
		echo '</tr>';
	}
	echo '</tbody></table>';
}
?>
