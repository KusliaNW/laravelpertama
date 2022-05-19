<?php
use App\Http\Controllers\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba/{no}', [CobaController::class, 'coba']); 
Route::get('/test', [CobaController::class, 'index']); 
Route::get('/test/{ke}', [CobaController::class, 'urutan']);
*/

Route::get('', [CobaController::class, 'index']);
// Route::get('/friends', [CobaController::class, 'index']);
// Route::get('/friends/create', [CobaController::class, 'create']);
// Route::post('/friends', [CobaController::class, 'store']);
// Route::get('/friends/{id}', [CobaController::class, 'show']);
// Route::get('/friends/{id}/edit', [CobaController::class, 'edit']);
// Route::put('/friends/{id}', [CobaController::class, 'update']);
// Route::delete('/friends/{id}', [CobaController::class, 'destroy']);

Route::resources([
    'friends' => CobaController::class,
    'groups' => GroupsController::class,
]);