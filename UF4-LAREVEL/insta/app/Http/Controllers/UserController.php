<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function update(Request $req){
        $user = \Auth::user();
        $id = \Auth::user()->id;
        $image_path = $req->file("avatar");
        var_dump($image_path);
        if ($image_path) {
            $path = explode("/",$image_path->store('users'));
            $user->image=end($path);
        }
        // validem les dades del formulari
        $validate = $this->validate($req, [
            "name"=>["required","string","max:255"],
            "surname"=>["required","string","max:255"],
            "nick"=>"required|string|max:255|unique:users,nick, ".$id,
            "email"=>"required|string|max:255|unique:users,email, ".$id,
        ]);

        //recollim les dades del formulari
        $name = $req->input("name");
        $surname = $req->input("surname");
        $nick = $req->input("nick");
        $email = $req->input("email");

        //assignem les dades del formulari
        $user->name=$name;
        $user->surname=$surname;
        $user->nick=$nick;
        $user->email=$email;

        $user->update();

        //Retornem a la Vista de configuracio amb un missatge que s'ha actualitzat correctament
        return redirect()->route("update")
                         ->with(["message"=>"Usuari actualitzat correctament"]);
    }
    public function getImage($filename){
        $file=Storage::disk("users")->get($filename);
        return response($file,200);
    }

    public function index(){
       return view("update");
    }
    public function getuser($id){
        $user=User::all()->get("image");
        $img = getImage($user);
        return response($img,200);
     }
}