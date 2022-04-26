<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Image;


class CommentController extends Controller{

    public function comment(Request $req){
        $comment = new comment();
        $id = \Auth::user()->id;

        // validem les dades del formulari
        $validate = $this->validate($req, [
            "content"=>["required","string","max:255"],
        ]);

        //recollim les dades del formulari
        $content = $req->input("descripcio");
        $createdAt=date("Y-m-d H:i:s");

        //assignem les dades del formulari
        $comment->user_id=$id;
        $comment->image_id=$idimg;
        $comment->content=$content;
        $image->created_at=$createdAt;
        $image->updated_at=$createdAt;

        $comment->save();

        //Retornem a la Vista de configuracio amb un missatge que s'ha actualitzat correctament
        return redirect()->route("comment")
                         ->with(["message"=>"comment subido correctament"]);
    }

    public function index(){
        return view("comment");
     }
}
