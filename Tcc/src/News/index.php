<?php
require_once(__DIR__ . '/php/NewsController.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Site</title>
</head>
<body>
	<main>
		<?php
		$dbh = new NewsController();
		$news = $dbh->getLatestNews();

		foreach ($news as $value){
			$id = $value['id'];
			$title = $value['title'];
			$shortDesc = $value['shortDescription'];
			$mainImage = $value['mainImage'];
			$href = "pages/new.php?id=" . $id;

			echo "<a href='{$href}'><div class='news'>
				<h2>{$title}</h2>
				<img src='{$mainImage}' />
				<p>{$shortDesc}<p>
			</div></a>";
		}
		?>
	</main>
</body>
</html>