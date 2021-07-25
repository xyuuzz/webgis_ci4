<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGeoJSONFileSemarangTable extends Migration
{
	public function up()
	{
		$field = [
			"id_geo_file" =>
			[
				"type" => "INT",
				"constraint" => 255,
				"unsigned" => true,
				"auto_increment" => true
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
			]
		];

		$this->forge->addField($field);
		$this->forge->addKey("id_geo_file", true, true);
		$this->forge->createTable("geojson_file");
	}

	public function down()
	{
		$this->forge->dropTable("geojson_file");
	}
}
