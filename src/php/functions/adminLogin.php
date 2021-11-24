<?php
if ($_REQUEST['password'] === ":)")
{
    session_start();

    $_SESSION['admin'] = 'true';
}
?>