<?php

namespace App\Controllers;

use App\Models\Kecamatan;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class KecamatanController extends BaseController
{
	use ResponseTrait;

	protected $kecamatan;
	public function __construct()
	{
		$this->kecamatan = new Kecamatan();
	}

	public function index()
	{
		$data = [
			"title_header_page" => "Kelola Kecamatan",
			"description_header_page" => "Daftar dan list Kecamatan",
			"title" => "Kecamatan",
			"icon" => "pe-7s-home"
		];

		return view('kecamatan/index', $data);
	}

	public function create()
	{
		$data = [
			"title_header_page" => "Tambah Data Kecamatan",
			"description_header_page" => "Form Data",
			"title" => "Tambah Kecamatan",
			"icon" => "pe-7s-home"
		];

		return view('kecamatan/create', $data);
	}

	public function store()
	{
		$geo_json = $this->request->getFile("geo_json");
		$name_geo_json = $geo_json?->getRandomName();

		$field = [
			"nama_kecamatan" => $this->request->getPost("nama_kecamatan"),
			"kode" => $this->request->getPost("kode"),
			"warna" => $this->request->getPost("color"),
			"geo_json" => $name_geo_json
		];

		if($this->kecamatan->insert($field))
		{
			$geo_json->move("geojson", $name_geo_json);
		}
		else
		{
			return $this->respond($this->kecamatan->errors(), 200);
		}

		return $this->respond(["status" => true], 200);

	}
}
