<?php

namespace Libs\Database;

use PDO;
use PDOException;

class MySQL
{
	private $dbhost;
	private $dbuser;
	private $dbname;
	private $dbpass;
	private $db;

	public function __construct(
		$dbhost = "127.0.0.1",
		$dbuser = "root",
		$dbname = "clinical_study",
		$dbpass = "root"
	) {
		$this->dbhost = $dbhost;
		$this->dbuser = $dbuser;
		$this->dbname = $dbname;
		$this->dbpass = $dbpass;
		$this->db = null;
	}

	public function connect()
	{
		try {
			$this->db = new PDO(
				"mysql:host=$this->dbhost;dbname=$this->dbname;charset=utf8",
				$this->dbuser,
				$this->dbpass,
				[
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				]
			);
           
			return $this->db;
		} catch (PDOException $e) {

			return $e->getMessage();
		}
	}
}