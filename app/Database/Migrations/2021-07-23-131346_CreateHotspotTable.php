<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHotspotTable extends Migration
{
	public function up()
	{
		$field = [
			"id_hotspot" => 
			[
				"type" => "INT",
				"constraint" => 255,
				"unsigned" => true,
				"auto_increment" => true
			],
			"id_kecamatan" => 
			[
				"type" => "INT",
				"constraint" => 255,
				"unsigned" => true,
			],
			"lokasi" => 
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"keterangan" => 
			[
				"type" => "VARCHAR",
				"constraint" => "255"
			],
			"lat" => 
			[
				"type" => "DECIMAL",
				"constraint" => "9,6"
			],
			"lng" => 
			[
				"type" => "DECIMAL",
				"constraint" => "9,6"
			],
			"tanggal" =>
			[
				"type" => "DATETIME"
			],
			"marker" => 
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
			],
		];

		$this->forge->addField($field);
		$this->forge->addForeignKey("id_kecamatan", "kecamatan", "id_kecamatan");
		$this->forge->addKey("id_hotspot", true, true);

		$this->forge->createTable("hotspot");
	}

	public function down()
	{
		$this->forge->dropTable("hotspot");
	}
}
