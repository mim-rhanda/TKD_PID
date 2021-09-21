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

	public function getCodes()
	{
		$statement = $this->db->query("SELECT code FROM medical_institution_master");
		return $statement->fetchAll();
	}

	public function getId($code)
	{
		$statement = $this->db->query("SELECT id FROM medical_institution_master where code = $code");
		return $statement->fetch();
	}

	public function getMedicalName($medicalId)
	{
		$statement = $this->db->query("SELECT name FROM medical_institution_master where id = $medicalId");
		return $statement->fetch();
	}

}
