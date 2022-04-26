<?php

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
use App\Models\Image;

Route::get('/', function () {
    //obting totes les images
    $images = Image::all();
    foreach ($images as $image){
        echo $image->image_path. "<br>";
        echo $image->description. "<br>";
        echo $image->user->name.' '.$image->user->surname;

        // if (count($image->comments)>=1){
        //     foreach($image->comments as $comment){
        //         echo $comment ->user->name.''.$comment->user->surname.': ';
        //         echo $comment->content.'</br>';
        //     }
        // }
        echo "<hr/>";
    }
    die();
    return view('welcome');
});

Auth::routes();
// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;
// edit user
Route::get('/update', [App\Http\Controllers\UserController::class, 'index'])->name('update');
Route::post('/subirUpdate', [App\Http\Controllers\UserController::class, 'update'])->name('subirUpdate');
// mostrar la img avatar
Route::get('/mostrar{filename}', [App\Http\Controllers\UserController::class, 'getImage'])->name('getimage');
// publicar imagenes
Route::get('/publicar', [App\Http\Controllers\ImagenController::class, 'index'])->name('publicar');
Route::post('/PublicarFoto', [App\Http\Controllers\ImagenController::class, 'subirImagen'])->name('PublicarFoto');
// mostrar la img
Route::get('/img{filename}', [App\Http\Controllers\ImagenController::class, 'getImage'])->name('getpub');
// get id user
Route::get('/user{userid}', [App\Http\Controllers\UserController::class, 'getuser'])->name('getuser');
// detaills
Route::get('/coment{userid}', [App\Http\Controllers\CommentController::class, 'index'])->name('detail');
Route::post('/comentup', [App\Http\Controllers\CommentController::class, 'comment'])->name('comentar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');