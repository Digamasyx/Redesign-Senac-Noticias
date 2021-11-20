<?php
if ($_REQUEST['password'] === "SUASENHA")
{
    session_start();

    $_SESSION['admin'] = 'true';
}
?>