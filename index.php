<?php
require __DIR__.'/vendor/autoload.php';

use App\Controllers\AboutController;
use App\Controllers\ContactUsController;
use App\Controllers\HomeController;

$homeController = new HomeController();
$aboutController = new AboutController();
$contactUsController = new ContactUsController();