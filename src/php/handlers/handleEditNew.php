<?php
require_once(dirname(__DIR__) . '/classes/NewsController.php');

if ($_SERVER["REQUEST_METHOD"] !== "POST") header("Location: ../../../index.php");
else
{
	$result = false;
	$dir = "../../../" . $_GET['originalPath'];
	$add = "email=admin@senac.com&name=secretoEdit";
	
	try
	{
		$nC = new NewsController();

		if ($_POST['action'] === "Edit")
		{
			if (!empty($_FILES['mainImg']['name'])) move_uploaded_file($_FILES['mainImg']['tmp_name'], $dir);

			$shortDesc = strlen($_POST['shortDesc']) === 0 ? "Sem descrição... :(" : $_POST['shortDesc'];
			$data = array(
				$_POST['title'],
				nl2br($shortDesc),
				nl2br($_POST['content']),
				NULL
			);

			$result = $nC->updateNew($_GET['id'], $data);
		}
		else if ($_POST['action'] === "Remove")
		{
			$result = $nC->deleteNew($_GET['id']);

			unlink($dir);
		}
	}
	catch (PDOException $e)
	{
		header("Location: ../../pages/newsAdmin.php?internalError=true&{$add}");
	}

	if ($result) header("Location: ../../pages/newsAdmin.php?success=true&{$add}");
	else 
	{
		if (!empty($_FILES['mainImg']['name']) && $_POST['action'] == 'Edit') header("Location: ../../pages/newsAdmin.php?success=true&{$add}");
		else header("Location: ../../pages/newsAdmin.php?noChanges=true&{$add}");
	}
}
?>