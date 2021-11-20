<?php
require_once(__DIR__ . "/getPath.php");
$password = file_get_contents(getPath("password.txt"));

if ($password !== false && $_REQUEST['password'] === $password)
{
    session_start();

    $_SESSION['admin'] = 'true';
}
?>