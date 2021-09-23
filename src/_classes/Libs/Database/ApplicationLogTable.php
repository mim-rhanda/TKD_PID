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
			
			$query = "INSERT INTO application_log( email, parent_email, medical_institution_id, medical_institution_code, medical_institution_name, age, consent_for_join, ascent_for_join, created_at, updated_at) 
			VALUES (:email, :parent_email, :medical_institution_id, :medical_institution_code, :medical_institution_name, :age, 1, 1, NOW(), NOW())";

			$statement = $this->db->prepare($query);
			$statement->execute($data);

			return $this->db->lastInsertId();
		} catch (PDOException $e) {
			return $e->getMessage()();
		}
	}

}
