<?php 
session_start();
if ($_SESSION['loggued_on_group'] == "admin")
{
	if (file_exists("./private/product"))
	{
		$tab = unserialize(file_get_contents('./private/product'));
		sort($tab);
	}
	else
		$tab = array();
	echo '<table>
		<thead>
			<tr>
				<th width=20%> Titre</th>
				<th width=20%> Img</th>
				<th width=10%> Prix</th>
				<th width=20%> Stock</th>
				<th width=20%> Categorie</th>
				<th width=20%> ID</th>
				<th width=20%> Active</th>
			</tr>
		</thead>
		<tbody>';
	foreach ($tab as $sth)
	{
		echo '<tr>';
		if ($sth['active'] == 1)
			echo '<th class="name"><b>'.$sth['name'].'</b></th>'. ' <th class ="img"> ' .$sth['img'] . ' </th>' . ' <th class = "price">' .$sth['price']. '</th>' . ' <th class = "stock" >' . $sth['stock'] . ' <th class="cat">'.$sth['cat'].'</th><th class="id"> '.$sth['id'].'</th><th class="active"> '.$sth['active'].'</th></br>';
		echo '</tr>';
	}
	echo '</tbody></table>';
}
?>
