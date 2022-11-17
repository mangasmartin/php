<?php
session_start();

$idiomas = ["es","ca","en"];

if (isset($_GET['idioma'])){
    if (!in_array($_GET['idioma'],$idiomas)){
        idiomaPorDefecto();
    } else {
        define("LANG",$_GET['idioma']);    
    }
    $_SESSION['idioma'] = LANG;
} else {
    if (!isset($_SESSION['idioma'])){
        idiomaPorDefecto();
    } else {
        define("LANG",$_SESSION['idioma']);
    }
}

function idiomaPorDefecto(){
    global $idiomas;
    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    if (!in_array($idioma,$idiomas)){
        define("LANG","es");
    } else {
        define("LANG",$idioma);
    }
}
?>