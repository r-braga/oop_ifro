<?php
    $objeto = new stdClass;
    
    $objeto->nomes= ['john','paul','ringo','george'];
    
    foreach ($objeto->nomes as $nome){
        echo $nome . '<br>';
    }
?>