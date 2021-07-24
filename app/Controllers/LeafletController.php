<?php

namespace App\Controllers;

use App\Models\TPSCoordinat;
use App\Controllers\BaseController;

class LeafletController extends BaseController
{
	protected $tps_coordinat;
	
	public function __construct()
	{
		$this->tps_coordinat = new TPSCoordinat();
	}

	public function maker_circle()
	{
		$data = [
			"title_header_page" => "Tampilan map standar",
			"description_header_page" => "View Map Standar",
			"title" => "Map Standar",
			"icon" => "pe-7s-home",
		];

		return view('leaflet_maker_circle/index', $data);
	}

	public function polyline()
	{
		$data = [
			"title_header_page" => "Polyline pada Leaflet",
			"description_header_page" => "Tampilan Polyline / garis pada Lefleat.js",
			"title" => "Polyline",
			"icon" => "pe-7s-home",
		];

		return view('leaflet_polyline/index', $data);
	}

	public function routing()
	{
		$data = [
			"title_header_page" => "Routing pada Lefleat",
			"description_header_page" => "Tampilan Routing pada Lefleat.js",
			"title" => "Routing",
			"icon" => "pe-7s-home",
		];

		return view('leaflet_routing/index', $data);
	}

	public function polygon()
	{
		$data = [
			"title_header_page" => "Poligon pada Leafleat",
			"description_header_page" => "Tampilan Bentuk Poligon pada Leaflet",
			"title" => "Polygon",
			"icon" => "pe-7s-home",
		];

		return view('leaflet_polygon/index', $data);
	}
	
	public function drag_marker()
	{
		$data = [
			"title_header_page" => "Mendapatkan Koordinat pada Leafleat",
			"description_header_page" => "Dapatkan Koordinat Peta dengan mengklik Peta Menggunakan Leaflet",
			"title" => "Get Coordinat",
			"icon" => "pe-7s-home",
		];
	
		return view('get_coordinat/drag_marker/index', $data);
	}
	
	public function marker_tps()
	{
		$data = [
			"list_tps" => $this->tps_coordinat->get()->getResultObject(),
			"title_header_page" => "Pemetaan Tempat TPS Kota Bandung dengan Marker",
			"description_header_page" => "Menampilkan Marker pada Peta, Koordinat sudah ada di Database",
			"title" => "Pemetaan TPS Marker",
			"icon" => "pe-7s-home",
		];

		return view('get_coordinat/marker_tps/index', $data);
	}
	
	public function circle_tps()
	{
		$data = [
			"list_tps" => $this->tps_coordinat->get()->getResultObject(),
			"title_header_page" => "Pemetaan Tempat TPS Kota Bandung dengan Circle",
			"description_header_page" => "Menampilkan Wilayah Tps dengan Circle Leaflet.js",
			"title" => "Pemetaan TPS Circle",
			"icon" => "pe-7s-home",
		];
	
		return view('get_coordinat/circle_tps/index', $data);
		
	}
}
