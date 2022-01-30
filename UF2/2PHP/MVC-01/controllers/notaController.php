<?php
// ---- 5 ---- crear controller nota
class NotaController {
    // El controlador encapsula accions
    // una acció de crear usuari, mostrar usuari, ...

    //fixem-nos el nom del mètode
    // carreguem el model
    // fem un usari nou
    // a una variable li assignem el resultat del
    // mètode aconseguir tots
    // carreguem a la vista

    public function mostrarTots(){
        require_once 'E:\Programas info\xampp\htdocs\PHP\UF2\2PHP\MVC-01\models\nota.php';

        $nota = new Nota();
        $totesLesNotes=$nota->aconseguirTots();

        require_once 'E:\Programas info\xampp\htdocs\PHP\UF2\2PHP\MVC-01\views\notes\mostrarTots.php';
    }
// ---- 8 -----
    public function crear(){
        require_once 'E:\Programas info\xampp\htdocs\PHP\UF2\2PHP\MVC-01\models\nota.php';

        $nota = new Nota();
        $nota->setNom("Nota1");
        $nota->setTitol("8");
        $nota->setDescripcio("molt be");
        // ---- 17 ----- 
        $nota->desar();
        require_once 'E:\Programas info\xampp\htdocs\PHP\UF2\2PHP\MVC-01\views\notes\mostrarNotes.php';

    }
}

?>