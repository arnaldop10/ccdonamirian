<?php 

require_once 'files/header.php';

if (isset($_GET["page"])) {
	if (file_exists('files/'.$_GET["page"].".php")) {
		require_once 'files/'.$_GET["page"].".php";
	}
} else {
	require_once 'files/main.php';
}

require_once 'files/footer.php';


?>