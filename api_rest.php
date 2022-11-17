<?php
header('Access-Control-Allow-Origin: *');

$root = "/exercici1/";
$uri = $_SERVER['REQUEST_URI'];
$dir = substr($uri,strlen($root));
$links = explode("/",$dir);

$json = "error";

switch ($links[0]){
    case "metodo1":
        $json = [ "clave1" => "valor1" ];
        break;
    case "metodo2":
        $json = [ "clave2" => "valor2" ];
        break;
    case "metodo3":
        $json = [ "clave3" => "valor3" ];
}

header("Content-Type: application/json");
echo json_encode($json);
?>