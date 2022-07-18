<?php

function saludarNombre(){
    echo "Hola Brayan";
}

function saludar(){
    echo "Hola ...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("Brayan", "Fandiño");



?>