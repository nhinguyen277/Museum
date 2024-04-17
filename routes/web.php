<?php
// use App\Models\User;
use App\Model\Museum;
use App\Model\Comment;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index',[UserController::class,'index']);

Route::get('user/login',[UserController::class,'loginForm']);
Route::post('user/login',[UserController::class,'login']);

Route::get('user/logout', [UserController::class,'logout'])->middleware('auth');

Route::get('admin/index', [AdminController::class,'index'])->middleware('auth');

Route::get('user/list', [UserController::class,'list'])->middleware('auth');
Route::get('user/add',[UserController::class,'add'])->middleware('auth');
Route::post('user/add',[UserController::class,'create'])->middleware('auth');
Route::get('user/edit/{user:id}',[UserController::class,'edit'])
->where('user','[0-9]+')->middleware('auth');
Route::post('user/edit/{user:id}',[UserController::class,'update'])
->where('user','[0-9]+')->middleware('auth');
Route::get('user/delete/{user:id}', [UserController::class,'delete'])
->where('user','[0-9]+')->middleware('auth');


Route::get('museum/index', [MuseumController::class,'index'])->middleware('auth');
Route::get('museum/add',[MuseumController::class,'add'])->middleware('auth');
Route::post('museum/add',[MuseumController::class,'create'])->middleware('auth');
Route::get('museum/edit/{museum:id}',[MuseumController::class,'edit'])
->where('museum','[0-9]+')->middleware('auth');
Route::post('museum/edit/{museum:id}',[MuseumController::class,'update'])
->where('museum','[0-9]+')->middleware('auth');
Route::get('museum/delete/{museum:id}', [MuseumController::class,'delete'])
->where('museum','[0-9]+')->middleware('auth');


Route::get('comment/index',[CommentController::class,'index'])->name('index')->middleware('auth','verified');
Route::get(
    'comment/trash/{id}',
    [CommentController::class,'trash']
)->name('comment.trash')->middleware('auth','verified');

Route::get(
    'comment/trashed/',
    [CommentController::class,'trashed']
)->name('comment.trashed')->middleware('auth','verified');


Route::get(
    'comment/restore/{id}',
    [CommentController::class,'trash']
)->name('comment.restore')->middleware('auth','verified');

Route::resource('comment',CommentController::class)->middleware('auth','verified');
Route::resource('user',AdminController::class);