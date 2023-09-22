<?php

use Illuminate\Support\Facades\Route;
use Nirajkavishka\Randuser\Controllers\CreateUserController;


Route::get('create_user', [CreateUserController::class, 'show']);