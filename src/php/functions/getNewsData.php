<?php
require_once(dirname(__DIR__) . "/classes/NewsController.php");

$nC = new NewsController();
$news = $nC->getNews($_REQUEST['id']);

echo json_encode($news);

exit;
?>