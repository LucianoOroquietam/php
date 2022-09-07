<?php
//

require_once "pi.php";
require "limiteTabla.php";

if($_GET ['action'] == !' '){
    
    include "templates/header.php";
    
}

else{

    //viene el action lo parto por barra
    $partesURL = explode('/', $_GET ['action']);

    if($partesURL[0] === 'limit=5'){
        mostrarTabla(5);
        
    }
    elseif($partesURL[0] === 'pi'){
        mostrarPi();
        
    }
    elseif($partesURL[0] === 'limit=10'){
        mostrarTabla(10);
        
    }
    elseif($partesURL[0] === 'limit=20'){
        mostrarTabla(20);
        
    }

}