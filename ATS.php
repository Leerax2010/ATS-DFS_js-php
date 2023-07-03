<?php

$file = $_POST['file'];
$data = $_POST['data'];

if(file_exists($file) === false  || str_replace(" ", "", file_get_contents($file)) === "" || str_replace(" ", "", file_get_contents($file)) === "null"){
    file_put_contents($file, "[]");
}


$file_data = file_get_contents($file);
$php_file_data = json_decode($file_data);
foreach($data as $s_data){
    /// HERE IS PLACE FOR EDIT DATA, ЭТО МЕСТО ДЛЯ ОБРОБОТКИ ДАННЫХ

    ///
    array_push($php_file_data, $s_data);
}

$json_file_data = json_encode($php_file_data);
file_put_contents($file, $json_file_data);
echo "OK";

?>