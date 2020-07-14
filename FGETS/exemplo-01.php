<?php

$fileName = "usuarios.csv";
if (file_exists($fileName)) {
    $file = fopen($fileName, "r");

    $headers = explode(",", fgets($file));
    $body = array();

    while ($row = fgets($file)) {
        $rowData = explode(",", $row);
        $linha = array();
        for ($i=0; $i < count($headers); $i++) { 
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($body, $linha);
    }
    fclose($file);


    echo json_encode($body);
}

?>