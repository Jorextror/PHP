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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
