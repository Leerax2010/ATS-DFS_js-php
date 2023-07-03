<?php

$file = $_POST['file'];
$data = $_POST['data'];

if(file_exists($file) === false){
    file_put_contents($file, '[]');
}

if(file_exists($file)){
    $file_data = file_get_contents($file);
    $php_file_data = json_decode($file_data);
    
        $indexes = [];
        $ii = -1;
        foreach($php_file_data as $php_ds){
            $ii = $ii + 1;
            foreach($data as $s_data){
            if($php_ds === $s_data){
                unset($php_file_data[$ii]);       
            }
        }
        }
    

    $php_file_data = array_values($php_file_data);
    $json_file_data = json_encode($php_file_data);
    file_put_contents($file, $json_file_data);
    
    echo "OK";
}else{
    echo "ERROR";
}



?>