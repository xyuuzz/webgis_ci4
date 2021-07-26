<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');
$routes->get('/kecamatan', 'KecamatanController::index');
$routes->get('/buat/kecamatan', 'KecamatanController::create');
$routes->get('/edit/kecamatan/(:any)', 'KecamatanController::edit/$1');
$routes->post('/store/kecamatan', 'KecamatanController::store');
$routes->patch('/update/kecamatan/(:any)', 'KecamatanController::update/$1');
$routes->delete("/delete/kecamatan/(:any)", "KecamatanController::delete/$1");

$routes->get("leaflet/circle-maker", "LeafletController::maker_circle", 
				["as" => "circle_maker"]);

$routes->get("leaflet/polyline", "LeafletController::polyline", 
				["as" => "polyline"]);

$routes->get("leaflet/route", "LeafletController::routing", 
				["as" => "routing"]);

$routes->get("leaflet/polygon", "LeafletController::polygon", 
				["as" => "polygon"]);

$routes->get("leaflet/get-coordinat/drag-marker", "LeafletController::drag_marker", 
				["as" => "drag_marker"]);

$routes->get("leaflet/get-coordinat/marker-tps", "LeafletController::marker_tps", 
				["as" => "marker_tps"]);

$routes->get("leaflet/get-coordinat/circle-tps", "LeafletController::circle_tps", 
				["as" => "circle_tps"]);

$routes->get("leaflet/get-coordinat/cluster-marker", "LeafletController::cluster_marker", 
				["as" => "cluster_marker"]);

$routes->get("leaflet/get-coordinat/heatmap", "LeafletController::heatmap", 
				["as" => "heatmap"]);

$routes->get("leaflet/get-coordinat/control-search", "LeafletController::control_search", 
				["as" => "control_search"]);

$routes->get("leaflet/polygon-geojson", "LeafletController::polygon_geojson", 
				["as" => "polygon_geojson"]);

$routes->get("leaflet/polygon-geojson-database", "LeafletController::polygon_geojson_database", [ "as" => "polygon_geojson_database" ]);

$routes->get("leaflet/base-map", "LeafletController::base_map", [ "as" => "base_map" ]);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
