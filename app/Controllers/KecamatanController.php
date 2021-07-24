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
			"icon" => "pe-7s-home",
			"daftar_kecamatan" => $this->kecamatan->get()?->getResultObject(),
			"no" => 1
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
		$this->kecamatan->addUploadedValidate();

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

		session()->setFlashData("success", "Berhasil Membuat data");
		return $this->respond(["status" => true], 200);
	}

	public function delete($id)
	{
		$this->kecamatan->delete($id);

		session()->setFlashData("success", "Berhasil Menghapus data kecamatan");
		return redirect()->to( base_url("/kecamatan") );
	}

	public function edit($id)
	{
		$kecamatan = $this->kecamatan->find($id);
		
		$data = [
			"title_header_page" => "Edit Data Kecamatan",
			"description_header_page" => "Sunting Form data dibawah",
			"title" => "Sunting Kecamatan",
			"icon" => "pe-7s-home",
			"kecamatan" => $kecamatan
		];

		return view('kecamatan/create', $data);
	}

	public function update($id)
	{
		$old_kec = $this->kecamatan->find($id);

		$field = [
			"nama_kecamatan" => $this->request->getVar("nama_kecamatan"),
			"kode" => $this->request->getVar("kode"),
			"warna" => $this->request->getVar("color"),
		];

		if($this->request->getFile("geo_json")->getError() !== 4)
		{
			$geo_json = $this->request?->getFile("geo_json");
			$name_geo_json = $geo_json?->getRandomName();

			$field["geo_json"] = $name_geo_json;
		}
		
		if($this->kecamatan->update($id, $field))
		{
			if( isset($geo_json) )
			{
				unlink("geojson/{$old_kec['geo_json']}");
				$geo_json?->move("geojson", $name_geo_json);
			}
		}
		else
		{
			return $this->respond($this->kecamatan->errors(), 200);
		}

		session()->setFlashData("success", "Berhasil Mensunting data Kecamatan");
		return $this->respond(["status" => true], 200);
	}
}
