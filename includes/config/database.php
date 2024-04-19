<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '2407', 'bienes_raices_crud');

    if(!$db){
        echo"Error";
        exit;
    }

    return $db;
} 