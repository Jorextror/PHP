<!-- Fes una cookie que desa la data (time stamp)  de la darrera visita 
en la que un usuari ha estat a la nostra web, 
i que ens mostri quants segons, hores,  o dies fa de la seva darrera visita, 
en cas que sigui la primera vegada que ens visita, que aparegui un missatge de benvingut. 
(Fes una funció per fer els càlculs. 
Esbrina com php desa la informació en la funció time() per exemple) -->
<?php
    include_once 'includes/header.php';
?>

<?php
    setcookie('cookie_name', time(), time()+60);

    function VisitaTime($t){
        echo "Desde la ultima visita(min-seg): ",date("i-s",time()-$t);
    }

    if (isset($_COOKIE['cookie_name'])) {
        VisitaTime($_COOKIE['cookie_name']);
    }else{
        echo"<h1>benvingut</h1>";
    }
?>

<?php
    include_once 'includes/footer.php';
?>