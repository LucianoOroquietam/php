<?php


    if(!empty($_GET["limit"])) { 
        $limite = $_GET["limit"];
        
    } 

    function mostrarTabla ($limite){
        
        echo "el limite es $limite";
        echo "<table text-align:center; border=5>";
            echo "<td>";
            echo "<tr><td>";
        
            for ($tabla=1; $tabla<=$limite  ; $tabla++) {
            
                echo "<td>$tabla</td>";
            
            }
            echo "</tr>";
        
            echo "<tr>";
            for ($multiplicador=1; $multiplicador <=$limite ; $multiplicador++) {
                echo "<tr> <td> $multiplicador </td>"; 
                for ($multiplicando=1; $multiplicando <=$limite ; $multiplicando++) { 
                    echo "<td>" . $multiplicador*$multiplicando . "</td>";
                }
            echo "</tr>";
        
            }
            echo "</tr>";
        
        
            echo "</table>";
    }




?>
