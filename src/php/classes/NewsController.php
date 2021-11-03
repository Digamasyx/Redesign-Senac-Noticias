<?php
require(__DIR__ . '/DatabaseConfig.php');

class NewsController extends DatabaseConfig
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insertNew($data)
	{
		$sql = 'INSERT INTO news (title, shortDescription, content, mainImage) VALUES (?, ?, ?, ?)';
		$statement = $this->dbh->prepare($sql);

		foreach ($data as $key => $value) $statement->bindValue($key + 1, $value, PDO::PARAM_STR);

		return $statement->execute();
	}

	public function updateNew($id, $data)
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

	public function deleteNew($id)
	{
		$sql = 'DELETE FROM news WHERE id = ?';
		$statement = $this->dbh->prepare($sql);
		
		$statement->bindValue(1, $id, PDO::PARAM_STR);

		$result = $statement->execute();

		return $result ? $statement->rowCount() : 0;
	}

	public function getNew($id)
	{
		$sql = 'SELECT * FROM news WHERE id = ?';
		$statement = $this->dbh->prepare($sql);

		$statement->bindValue(1, $id, PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function getLatestNews()
	{
		$sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 10';
		$statement = $this->dbh->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>