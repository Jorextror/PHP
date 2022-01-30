<!-- ---- 9 ----- -->
<?php

function app_autoloader($classname){
    var_dump($classname);
    require_once 'controllers/'.strtolower($classname).'.php';
}
sql_autoload_register('app_autoloader');
?>