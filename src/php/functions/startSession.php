<?php
if (isset($_COOKIE[session_name()]))
{
	session_start();
	setcookie(session_name(), session_id(), time() + 2592000, '/', $_SERVER['SERVER_NAME']);
}
?>