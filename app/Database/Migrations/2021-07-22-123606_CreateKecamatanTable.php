<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKecamatanTable extends Migration
{
	public function up()
	{
		$fields = [
			"id_kecamatan" => 
			[
				"type" => "INT",
				"constraint" => 255,
				"unsigned" => true,
				"auto_increment" => true
			],
			"kode" =>
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"nama_kecamatan" =>
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"geo_json" => 
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"warna" => 
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"created_at" => 
			[
				"type" => "DATETIME",
				"null" => true
			],
			"updated_at" => 
			[
				"type" => "DATETIME",
				"null" => true
			]
		];

		$this->forge->addField($fields);
		$this->forge->addKey("id_kecamatan", true, true);
		$this->forge->createTable("kecamatan");
	}

	public function down()
	{
		$this->forge->dropTable("kecamatan");
	}
}
