<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');

if (isset($_GET['id'])){
	$nC = new NewsController();
	$new = $nC->getNew($_GET['id']);
	
	$id = $new['id'];
	$title = $new['title'];
	$shortDesc = $new['shortDescription'];
	$mainImage = $new['mainImage'];
	$content = $new['content'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
</head>
<body>
	<main>
		<!--header -->
		<?php require_once('src/php/componentes/header.php') ?>
		<!--header -->
		<div class='new'>
			<h1><?php echo $title; ?></h1>
			<div class='content'><?php echo $content; ?></div>
		</div>
		<!--footer -->
		<?php require_once('src/php/componentes/footer.php') ?>
		<!--footer -->
	</main>
</body>
</html>