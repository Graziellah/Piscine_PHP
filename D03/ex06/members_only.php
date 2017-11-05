<?php
if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys"))
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
}
else
{
$file = "../img/42.png";
echo "<html><body>Bonjour Zaz</br><img src=data:image/png;base64,". base64_encode($file) . "></body></html>\n";
}
?>
