<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route
// Route::get('/', function () {
//     return view("welcome");
// });
// Route::get('/hello', function () {
//     return  'hello world';
// });

// Route::get('/world', function () {
//     return  'world ';
// });
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });
// Route::get('/posts/{posts}/comments/{comment}', function ($postId, $commentId) {
//     return 'pos ke ' . $postId . "Komentar ke-:" . $commentId;
// });
// Route::get('/user/{name?}', function ($name = 'ariel') {
//     return 'Nama saya ' . $name;
// });
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });
//controller
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
//view
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'zidan']);
// });
Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
