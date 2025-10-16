<?php
use App\Models\User;
use App\Models\Module;
use App\Http\Controllers\{AuthController,UserController, ModuleController};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/modules', [ModuleController::class,'show']);

});
// Route::post('/modules/{id}/activate', ModuleController::class);
// Route::post('/modules/{id}/deactivate', ModuleController::class);