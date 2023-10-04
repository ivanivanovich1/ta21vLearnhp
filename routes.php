<?php

use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);
Router::get('/answer', [PublicController::class, 'getAnswer']);