<?php
require_once(dirname(__DIR__) . '/classes/NewsController.php');
require_once(dirname(__DIR__) . '/functions/startSession.php');

$check = isset($_SESSION['admin']);

if (!$check) header("Location: ../../../index.php");
else
{
	$result = false;
	$dir = "../../../" . $_GET['originalPath'];
	
	try
	{
		$nC = new NewsController();

		if ($_GET['action'] === "Edit")
		{
			move_uploaded_file($_FILES['mainImg']['tmp_name'], $dir);

			$shortDesc = strlen($_POST['shortDesc']) === 0 ? "Sem descrição... :(" : $_POST['shortDesc'];
			$data = array(
				$_POST['title'],
				nl2br($shortDesc),
				nl2br($_POST['content']),
				NULL
			);

			$result = $nC->updateNews($_GET['id'], $data);
		}
		else if ($_GET['action'] === "Remove")
		{
			$result = $nC->deleteNews($_GET['id']);

			unlink($dir);
		}
	}
	catch (PDOException $e)
	{
		header("Location: ../../pages/newsAdmin.php?internalError=true");
	}

	if ($result) header("Location: ../../pages/newsAdmin.php?success=true");
	else 
	{
		if (!empty($_FILES['mainImg']['name']) && $_GET['action'] == 'Edit') header("Location: ../../pages/newsAdmin.php?success=true");
		else header("Location: ../../pages/newsAdmin.php?noChanges=true");
	}
}
?>