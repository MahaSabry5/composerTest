<?php
require __DIR__.'/vendor/autoload.php';

use App\Controllers\AboutController;
use App\Controllers\HomeController;

$homeController = new HomeController();
$aboutController = new AboutController();