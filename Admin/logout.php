<?php
	
	session_start();
	session_destroy();
	header("location: 2_admin_log.php");
	
?>