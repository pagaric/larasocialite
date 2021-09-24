<?php

use App\Http\Controllers\AuthAzureController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes Azure AD
Route::get('/auth/redirect', [AuthAzureController::class, 'redirect'])->name('azure.login');
Route::get('/auth/callback', [AuthAzureController::class, 'callback']);
Route::get('/auth/logoutazure', [AuthAzureController::class, 'logout'])->name('azure.logout');
Route::get('/auth/logout', function () {
    return view('welcome');
});
