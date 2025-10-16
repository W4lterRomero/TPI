<?php

use lib\Route;
use app\controllers\HomeController;

Route::get("/", [HomeController::class, "Index"]);
Route::get("/dia1", [HomeController::class,"dia1"]);
Route::get("/dia2", [HomeController::class,"dia2"]);
Route::get("/dia3", [HomeController::class,"dia3"]);
Route::get("/dia4", [HomeController::class,"dia4"]);
Route::get("/dia5", [HomeController::class,"dia5"]);
Route::get("/autor", [HomeController::class,"autor"]);
Route::dispatch();

?>