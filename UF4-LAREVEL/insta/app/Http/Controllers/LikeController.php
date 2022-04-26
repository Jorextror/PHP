<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;


class LikeController extends Controller
{
    public function like(Request $req){
        $like = new Like();
        $id =\Auth::id();

        // Recollir les dades del formulari
        $createdAt=date("Y-m-d H:i:s");

        // Assignar valors a l'objecte imatge nou
        $like->user_id=$id;
        $like->image_id=$idimg;
        $like->created_at=$createdAt;
        $like->updated_at=$createdAt;

        // Desar a storage/app/img
        $like->save();
        return redirect()->route("like")
                         ->with(["message"=>"like subida correctament"]);
    }

    public function index(){
        return view("like");
    }

}