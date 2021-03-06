<?php

namespace App\Models;

use CodeIgniter\Model;

class Kecamatan extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'kecamatan';
	protected $primaryKey           = 'id_kecamatan';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ["kode", "nama_kecamatan", "geo_json", "warna"];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules = [
		"kode" => "required|string|min_length[4]",
		"nama_kecamatan" => "required|string|min_length[4]",
		"warna" => "required|string|min_length[4]",
	];

	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function addUploadedValidate()
	{
		$this->validationRules["geo_json"] = "uploaded[geo_json]";
	}
}
