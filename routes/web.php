<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Models\Comment;
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

Route::get('/', function () {
    return view('home');
});



Route::get('/create/user', [UserController::class, 'creatUsers']);
Route::get('/create/comment',[CommentController::class,'creatComments']);
Route::get('/user/comments',[UserController::class,'getUserComments']);
Route::get('/users',[UserController::class,'getUsers']);
Route::get('/comments',[CommentController::class,'getComments']);
Route::get('/user/dalete',function (){
    Comment::truncate();
});

Route::post('articles/create',[ArticleController::class,'createArticle']);
Route::get('articles/create',[ArticleController::class,'createArticle']);
Route::get('articles/insert',[ArticleController::class,'insertArticle']);
Route::get('/articles/all',[ArticleController::class,'getArticles']);
Route::post('articles/delete/{id}',[ArticleController::class,'deleteArticle']);
Route::post('articles/edit/{id}',[ArticleController::class,'editArticle']);
Route::post('articles/update/{id}',[ArticleController::class,'updateArticle']);
Route::post('articles/view/{id}',[ArticleController::class,'updateArticle']);

