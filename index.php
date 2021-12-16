<?php
require __DIR__.'/vendor/autoload.php';

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\MapsController;

$homeController = new HomeController();
$aboutController = new AboutController();
$mapsController = new MapsController();