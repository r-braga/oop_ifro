<?php
    
    // Aula Como criar um objeto
    
    $objeto = new stdClass;
    
    $objeto->beatles = ['john','paul','geroge','ringo'];
    
    foreach ($objeto->beatles as $nome){
        echo nome . '</br>';
    }