<?php

use lib\Route;
use app\controllers\HomeController;

Route::get("/Home", [HomeController::class, "index"]);
     
Route::dispatch();

?>