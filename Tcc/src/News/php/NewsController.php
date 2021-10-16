<?php
require(__DIR__ . '/DatabaseConfig.php');

class NewsController extends DatabaseConfig{
	public function __construct(){
		parent::__construct();
	}

	public function insertNew($data){
		$sql = 'INSERT INTO news (title, shortDescription, content, mainImage) VALUES (?, ?, ?, ?)';
		$statement = $this->dbh->prepare($sql);

		foreach ($data as $key => $value) $statement->bindValue($key + 1, $value, PDO::PARAM_STR);

		return $statement->execute();
	}

	public function getNew($id){
		$sql = 'SELECT * FROM news WHERE id = ?';
		$statement = $this->dbh->prepare($sql);

		$statement->bindValue(1, $id, PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function getLatestNews(){
		$sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 10';
		$statement = $this->dbh->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>