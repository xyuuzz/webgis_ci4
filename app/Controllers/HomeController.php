<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		$data = [
			"title_header_page" => "My Dashboard",
			"description_header_page" => "Hello nama_orang",
			"title" => "Dashboard Webgis",
			"icon" => "pe-7s-car"
		];

		return view('index', $data);
	}
}
