<?php
require_once(dirname(__DIR__) . '/php/NewsController.php');

if (isset($_GET['id'])){
	$dbh = new NewsController();
	$new = $dbh->getNew($_GET['id']);
	
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
	<title><?php echo htmlspecialchars($title); ?></title>
</head>
<body>
	<main>
		<?php
		echo "<div class='new'>
			<h1>{$title}</h1>
			<div class='content'>{$content}</div>
		</div>";
		?>
	</main>
</body>
</html>