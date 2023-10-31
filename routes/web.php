<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Models\Author;
use App\Models\Comment;
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

//articles

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/create',[ArticleController::class, 'create'] );

Route::post('/articles/store', [ArticleController::class, 'store'] );

Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);

Route::post('/articles/{id}', [ArticleController::class, 'update']);

Route::delete('/articles/delete/{id}', [ArticleController::class, 'delete']);

Route::get('/articles/detail/{slug}/{id}',[ArticleController::class, 'detail']);

//authors

Route::get('/authors/list', [AuthorController::class, 'index']);

Route::get('/authors/new',[AuthorController::class, 'create'] );

Route::post('/authors/store', [AuthorController::class, 'store'] );

Route::get('/authors/edit/{id}', [AuthorController::class, 'edit']);

Route::post('/authors/{id}', [AuthorController::class, 'update']);

Route::get('/authors/{id}/articles',[AuthorController::class, 'indexByAuthor']);

//login 
Route::get('/login', [LoginController::class, 'login'])->name("login");

Route::post('/doLogin', [LoginController::class, 'doLogin']);

Route::get('/register', [LoginController::class, 'register']);

Route::post('/doRegister', [LoginController::class, 'doRegister']);

//comments

Route::get('/comments/create/{id}', [CommentController::class, 'create']);

Route::post('/comments/store/{id}', [CommentController::class, 'store']);



