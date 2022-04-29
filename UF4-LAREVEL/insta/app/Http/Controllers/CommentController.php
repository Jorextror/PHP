<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Image;
use App\Models\User;

class CommentController extends Controller{

    public function comment(Request $req){
        $comment = new Comment();
        $id = \Auth::user()->id;

        // validem les dades del formulari
        // $validate = $this->validate($req, [
        //     "content"=>["required","string","max:255"],
        // ]);

        //recollim les dades del formulari
        $content = $req->input("content");
        $imgid = $req->input("imgid");
        $createdAt=date("Y-m-d H:i:s");

        //assignem les dades del formulari
        $comment->user_id=$id;
        $comment->image_id=$imgid;
        $comment->content=$content;
        $comment->created_at=$createdAt;
        $comment->updated_at=$createdAt;

        $comment->save();

        //Retornem a la Vista de configuracio amb un missatge que s'ha actualitzat correctament
        return redirect()->route("home")
                         ->with(["message"=>"comment subido correctament"]);
    }

    // public function index($imgid){
    //     $imgs = Image::all();
    //     return view('detaill',compact('imgs'));
    // }

    public function index($filename){
        foreach(Image::all() as $img){
            if($img->id==$filename){
                return view('detaill',['img'=>$img]);
            }
        }
    }

    public function delcomment($filename){
        foreach(Comment::all() as $comm){
            if($comm->id==$filename){
                $comm->delete();
                return view('home');
            }
        }
    }
}
