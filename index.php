<?php

use app\Route;
use app\View;
use app\controllers\MainController;
use app\controllers\ShopController;

require_once './vendor/autoload.php';

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

// Shop Stuff
Route::get('/shop/{category}', [ShopController::class, 'products']);

Route::run();