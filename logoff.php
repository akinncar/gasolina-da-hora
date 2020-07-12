<?php
	session_start();
	unset($_SESSION['logged']);
	echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';
?>