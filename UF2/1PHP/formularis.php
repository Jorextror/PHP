<?php
session_start();
if(isset($_POST["action"])){
    if($_POST["submit"]=="Cancel·la"){
        header("Location: index.html");
    }else{
        class Validar{
            public static $ValidId="/^[A-Za-z0-9\-_.]+/gm";
            public static $ValidForm="/^[A-Za-z0-9\-_.]*\.(php)$/gm";
            public static $ValidCamps=10;

            public static function validarId($id){
                if(preg_match(self::$ValidId,$id)){
                    return true;
                }else{
                    return false;
                }
            }
            public static function validarAction($action){
                if(preg_match(self::$ValidForm,$action)){
                    return true;
                }else{
                    return false;
                }
            }
            public static function validarCamps($camps){
                if(self::$ValidCamps < $camps && $camps > 0)){
                    return true;
                }else{
                    return false;
                }
            }
        }
        $id=$_POST["id"];
        $method=$_POST["method"];
        $action=$_POST["action"];
        $camps=$_POST["camps"];

        if(Validar::validarId($id)){
            $_SESSION['id']='true'+$id;
        }else{
            $_SESSION['id']='error false mal no'+$id;
        }

        if(Validar::validarAction($action)){
            $_SESSION['action']='true'+$action;
        }else{
            $_SESSION['action']='error false mal no'+$action;
        }
        
        if(Validar::validarCamps($camps)){
            $_SESSION['camps']='true'+$camps;
        }else{
            $_SESSION['camps']='error false mal no'+$camps;
        }
        header("Location: result.php");
    }
}
?>