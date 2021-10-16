<?php
class DatabaseConfig{
	protected $dbh;

	protected function __construct(){
		$this->dbh = new PDO('mysql:host=localhost;dbname=senac', 'root', '');

		$this->createNewsTable();
	}

	private function createNewsTable(){
		$this->dbh->exec("CREATE TABLE IF NOT EXISTS news (
			id INT PRIMARY KEY auto_increment,
			title VARCHAR(255) NOT NULL,
			shortDescription VARCHAR(255) DEFAULT 'Sem descrição...',
			content LONGTEXT NOT NULL,
			mainImage VARCHAR(255)
		)");
	}
}
?>