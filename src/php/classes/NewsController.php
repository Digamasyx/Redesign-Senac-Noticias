<?php
require(__DIR__ . '/DatabaseConfig.php');

class NewsController extends DatabaseConfig
{
	public function __construct()
	{
		date_default_timezone_set('America/Sao_Paulo');
		
		parent::__construct();
	}

	public function insertNews($data)
	{
		$sql = 'INSERT INTO news (title, shortDescription, content, mainImage, date) VALUES (?, ?, ?, ?, ?)';
		$statement = $this->dbh->prepare($sql);

		foreach ($data as $key => $value) $statement->bindValue($key + 1, $value, PDO::PARAM_STR);

		$statement->bindValue(sizeof($data) + 1, date('d/m/Y'), PDO::PARAM_STR);

		return $statement->execute();
	}

	public function updateNews($id, $data)
	{
		$sql = 'UPDATE news 
			SET title = IFNULL(?, title), 
			shortDescription = IFNULL(?, shortDescription), 
			content = IFNULL(?, content),
			mainImage = IFNULL(?, mainImage)
			WHERE id = ?';

		$statement = $this->dbh->prepare($sql);

		foreach ($data as $key => $value) $statement->bindValue($key + 1, $value, PDO::PARAM_STR);

		$statement->bindValue(count($data) + 1, $id, PDO::PARAM_INT);
		
		$result = $statement->execute();

		return $result ? $statement->rowCount() : 0;
	}

	public function deleteNews($id)
	{
		$sql = 'DELETE FROM news WHERE id = ?';
		$statement = $this->dbh->prepare($sql);
		
		$statement->bindValue(1, $id, PDO::PARAM_STR);

		$result = $statement->execute();

		return $result;
	}

	public function getNews($id)
	{
		$sql = 'SELECT * FROM news WHERE id = ?';
		$statement = $this->dbh->prepare($sql);

		$statement->bindValue(1, $id, PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function getAllNews()
	{
		$sql = 'SELECT * FROM news ORDER BY id DESC';
		$statement = $this->dbh->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getLatestNews()
	{
		$sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 6';
		$statement = $this->dbh->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>