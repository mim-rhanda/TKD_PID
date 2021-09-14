<?php

namespace Libs\Database;
include("vendor/autoload.php");
use Libs\Database\MySQL;

use PDOException;

class MedicalInstitutionMasterTable
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

	public function getAll()
	{
		$statement = $this->db->query("SELECT * FROM medical_institution_master");
		return $statement->fetchAll();
	}

}