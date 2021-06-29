<?php
	session_start();
	session_unset(admin_id);
	header("location:search_index.php");
?>