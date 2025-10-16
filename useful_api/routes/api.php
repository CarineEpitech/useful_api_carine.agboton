<?php
use App\Models\User;
use App\Models\Module;
use App\Http\Controllers\{AuthController,UserController, ModuleController};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/register', AuthController::class);
Route::apiResource('/login', AuthController::class);
Route::apiResource('/modules', ModuleController::class);
