<?php
session_start();

if (session_destroy())
{
	setcookie(session_name(), NULL, -1, '/');
	header("Refresh: 0; /index.php");
}
?>