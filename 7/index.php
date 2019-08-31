<?php
include_once 'systems/Request.php';
include_once 'systems/Router.php';
include_once 'systems/Db.php';



include_once 'controllers/HomeController.php';
include_once 'controllers/BiodataController.php';
include_once 'controllers/CitiesController.php';


include_once 'models/Cities.php';
include_once 'models/Biodata.php';


use controllers\CitiesController;
use controllers\HomeController;
use controllers\BiodataController;



$HOME = new HomeController();
$BIODATA = new BiodataController();
$CITIES = new CitiesController();


$router = new Router(new Request);



$router->get('/', function($request) use ($HOME) {
    return $HOME->index($request);
});


$router->get('/cities', function($request) use ($CITIES) {
    return $CITIES->index($request);
});

$router->post('/cities', function($request) use ($CITIES) {
    return $CITIES->store($request);
});

$router->post('/cities/delete', function($request) use ($CITIES) {
    return $CITIES->delete($request);
});


$router->get('/biodata', function($request) use ($BIODATA) {
    return $BIODATA->index($request);
});
$router->post('/biodata', function($request) use ($BIODATA) {
    return $BIODATA->create($request);
});
$router->post('/biodata/delete', function($request) use ($BIODATA) {
    return $BIODATA->delete($request);
});
$router->post('/biodata/update', function($request) use ($BIODATA) {
    return $BIODATA->update($request);
});