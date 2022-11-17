<?php
$csv = [];
$file = fopen("file.csv","r");
$keys = fgets($file);
$columns = explode(";",$keys);

do {
    $row = explode(";",fgets($file));
    array_push($csv, array_combine($columns,$row));
} while (!feof($file));

for ($i = 0; $i < count($csv); $i++){
    //
    echo $csv[$i]['name'];
}
?>