<?php
require_once(dirname(__DIR__) . '/classes/NewsController.php');

if ($_SERVER["REQUEST_METHOD"] !== "POST") header("Location: ../../../index.php");
else
{
	$result = false;
	$extension = pathinfo($_FILES['mainImg']['name'], PATHINFO_EXTENSION);
	$fileName = 'News_' . date("Y.m.d-H.i.s") . '.' . $extension;
	$dir = "../../../assets/img/news/";
	$htmlPath = "assets/img/news/" . $fileName;

	$shortDesc = strlen($_POST['shortDesc']) === 0 ? "Sem descrição... :(" : $_POST['shortDesc'];
	$data = array(
		$_POST['title'],
		nl2br($shortDesc),
		nl2br($_POST['content']),
		$htmlPath
	);

	try
	{
		$nC = new NewsController();
		$result = $nC->insertNews($data);
		
		move_uploaded_file($_FILES['mainImg']['tmp_name'], $dir . $fileName);
	}
	catch (PDOException $e)
	{
		header("Location: ../../pages/newsAdmin.php?internalError=true");
	}

	if ($result) header("Location: ../../pages/newsAdmin.php?success=true");
	else header("Location: ../../pages/newsAdmin.php?internalError=true");
}
?>