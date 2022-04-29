<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ImagenController extends Controller
{
    public function subirImagen(Request $req){
        $image = new Image();
        $id =\Auth::id();

        // Validar les dades del formulari
        // $req->validate([
        //     'imagen' => 'required|mimes:png,jpg,jpeg|max:2048',
        //     'descripcio' => ['required', 'string', 'max:255']
        // ]);

        // Recollir les dades del formulari
        $imagen = $req->file("imagen");
        $path = explode("/",$imagen->store('img'))[1];
        $description = $req->input("descripcio");
        $createdAt=date("Y-m-d H:i:s");

        // Assignar valors a l'objecte imatge nou
        $image->user_id=$id;
        $image->description=$description;
        $image->image_path=$path;
        $image->created_at=$createdAt;
        $image->updated_at=$createdAt;

        // Desar a storage/app/img
        $image->save();
        return redirect()->route("publicar")
                         ->with(["message"=>"Imagen subida correctament"]);
    }

    public function index(){
        return view("publicar");
    }

    public function getImage($filename){
        $file=Storage::disk("img")->get($filename);
        return response($file,200);
    }

    public function comments($filename){
        foreach(Image::all() as $img){
            if($img->id==$filename){
                return view('detail',['img'=>$img]);
            }
        }
    }
}

