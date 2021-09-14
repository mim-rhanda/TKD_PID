<?php

namespace Libs\Database;
include("vendor/autoload.php");
use Libs\Database\MySQL;

use PDOException;

class ApplicationLogTable
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

    public function insert($data)
	{
		try {
			$query = " INSERT INTO application_log (email, medical_institution_code, age_group, consent_for_join, ascent_for_join, created_at, updated_at) VALUES (:email, :medical_institution_code, :age_group, 1, 1, NOW(), NOW())";

			$statement = $this->db->prepare($query);
			$statement->execute($data);

			return $this->db->lastInsertId();
		} catch (PDOException $e) {
			return $e->getMessage()();
		}
	}

}
