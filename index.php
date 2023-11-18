<?php

use app\Route;
use app\View;
use app\controllers\MainController;

require_once './vendor/autoload.php';

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::run();