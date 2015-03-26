<?php
require_once('header.php');

if (isset($_GET['page'])) {
	$path = htmlspecialchars($_GET['page']).'.php';
}
else {
	$path = 'main.php';
}

require_once($path);

require_once('footer.php');

?>