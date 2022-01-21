<?php
session_start();
if(isset($_POST["action"])){
    if($_POST["submit"]=="Cancel·la"){
        header("Location: index.html");
    }else{
        class Validar{
            public static $ValidId="/^[A-Za-z0-9\-_.]+/";
            public static $ValidForm="/^[A-Za-z0-9\-_.].(php)$/";
            public static $ValidCamps=10;

            public static function validarId($id){
                return(preg_match(self::$ValidId,$id));
            }
            public static function validarAction($action){
                return(preg_match(self::$ValidForm,$action));
            }
            public static function validarCamps($camps){
                return($camps<=self::$ValidCamps && $camps > 0);
            }
        }
        $id=$_POST["id"];
        $method=$_POST["method"];
        $action=$_POST["action"];
        $camps=$_POST["camps"];
        $valid=TRUE;

        unset($_SESSION['idV']);
        unset($_SESSION['actionV']);
        unset($_SESSION['campsV']);
        if(Validar::validarId($id)){
            $_SESSION['id']=$id;
        }else{
            $_SESSION['idV']="letras, numeros";
            $valid=TRUE;
        }

        if(Validar::validarAction($action)){
            $_SESSION['action']=$action;
            
        }else{
            $_SESSION['actionV']="letras, nuemros";
            $valid=FALSE;
        }
        
        if(Validar::validarCamps($camps)){
            $_SESSION['camps']=$camps;
        }else{
            $_SESSION['campsV']="menor de 10 y numero positiu";
            $valid=FALSE;
        }
        $_SESSION['method']=$method;
        if ($valid==TRUE) {
            header("Location: forms.php");
        }else{
            header("Location: index.php");
        }
    }
}
?>