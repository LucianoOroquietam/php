<?php
//

require_once "pi.php";
require "limiteTabla.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

if($_GET ['action'] == !' '){
    
    include "templates/header.php";
    
}

else{

    //viene el action lo parto por barra
    
    $partesURL = explode('/', $_GET ['action']);

    if($partesURL[0] === '5'){
        mostrarTabla(5);
        
    }
    elseif($partesURL[0] === 'pi'){
        mostrarPi();
        
    }
    elseif($partesURL[0] === '10'){
        mostrarTabla(10);
        
    }
    elseif($partesURL[0] === '20'){
        mostrarTabla(20);
        
    }

}

