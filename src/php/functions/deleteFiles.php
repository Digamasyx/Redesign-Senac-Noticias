<?php
require_once(dirname(__DIR__) . '/functions/startSession.php');

$check = isset($_SESSION['admin']);

if ($check)
{
    $paths = $_REQUEST['paths'];
    
    foreach ($paths as $path) unlink('../../../' . $path);
}
?>