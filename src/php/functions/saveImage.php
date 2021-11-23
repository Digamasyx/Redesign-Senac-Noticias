<?php
require_once(dirname(__DIR__) . '/functions/startSession.php');

$check = isset($_SESSION['admin']);

if ($check) 
{
    $file = $_FILES['file'];
    $path = '../../../assets/img/news/content';
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = '/Content_' . date("Y.m.d-H.i.s") . '.' . $extension;

    if (!is_dir($path)) mkdir($path);

    move_uploaded_file($file['tmp_name'], $path . $filename);

    echo '/assets/img/news/content' . $filename;

    exit;
}
?>