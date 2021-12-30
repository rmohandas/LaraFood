<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProdutosController;


route::get('/', [HomeController::class, 'index']);

route::get('/', [ProdutosController::class, 'index']);
