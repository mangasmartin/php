<?php
include("config.php");
$bd = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS);
$con = $bd->prepare('SELECT nombres FROM tabla');
$con->execute();
$res = $con->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i ++){
    //
    echo $res[$i]['nombres'];
}
?>